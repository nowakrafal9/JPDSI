<?php
    namespace app\controllers;

    use app\forms\CalcListForm;
    use PDOException;

    class CalcListCtrl {
        private $form;
        private $records;

        public function __construct() { $this->form = new CalcListForm(); }

        public function getParams() { $this->form->amount = getFromRequest('kredyt'); }

        public function validate() { return !getMessages()->hasErrors(); }

        public function validateEdit() {
            $this->form->id = getFromRequest('id', true, 'Błędne wywołanie aplikacji');
            return !getMessages()->hasErrors();
        }

        public function action_calcList() {
            $this->getParams();
            $this->validate();

            $search_params = [];
            if (isset($this->form->amount) && !empty($this->form->amount) && is_numeric($this->form->amount)) {
                $search_params['amount'] = $this->form->amount;
            }

            $num_params = sizeof($search_params);
            if ($num_params > 1) {
                $where = ["AND" => &$search_params];
            } else {
                $where = &$search_params;
            }
            $where["ORDER"] = "credit_id";

            try {
                $this->records = getDB()->select("kalk", [
                    "credit_id",
                    "amount",
                    "years",
                    "interest",
                    "monthly_rate",
                ], $where);
            } 
            catch (PDOException $ex) {
                getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
                if (getConf()->debug) {
                    getMessages()->addError($ex->getMessage());
                }
            }

            $this->generateView();
        }

        public function action_calcDelete() {
            if (!inRole('admin')) {
                getMessages()->addError('Tylko administrator może usuwać rekordy!');
            } else if ($this->validateEdit()) {
                try {
                    getDB()->delete("kalk", [
                        "credit_ID" => $this->form->id
                    ]);
                    getMessages()->addInfo('Pomyślnie usunięto rekord');
                } catch (PDOException $ex) {
                    getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
                    if (getConf()->debug) {
                        getMessages()->addError($ex->getMessage());
                    }
                }
            }

            forwardTo('calcList');
        }

        public function generateView() {    
            getSmarty()->assign('user',unserialize($_SESSION['user']));

            getSmarty()->assign('page_title','Kalkulator rat');
            getSmarty()->assign('page_description','Kalkulator rat obiektowy');
            getSmarty()->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Ochrona zasobów, routing</p>');
            getSmarty()->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');         

            getSmarty()->assign('form', $this->form);
            getSmarty()->assign('records', $this->records);

            getSmarty()->display('CalcListView.tpl');
        }

    }
