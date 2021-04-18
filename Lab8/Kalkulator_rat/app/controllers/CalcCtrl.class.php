<?php
    namespace app\controllers;
    
    use app\forms\CalcForm;
    use app\transfer\CalcResult;
    
    class CalcCtrl {
        private $form;
        private $result;
       
        public function __construct() {
            $this->form = new CalcForm();
            $this->result = new CalcResult();
        }
         
        public function getParams(){
            $this->form->kredyt = getFromRequest('kredyt');
            $this->form->lata = getFromRequest('il_lat');
            $this->form->procent = getFromRequest('oprocentowanie');
        }
       
        public function validate(){
            if(!(isset($this->form->kredyt) && isset($this->form->lata) && isset($this->form->lata))){
                return false;
            }
           
            if(empty(trim($this->form->kredyt))) { getMessages()->addError("Nie podano kwoty kredytu");}
            if(empty(trim($this->form->lata))) { getMessages()->addError("Nie podano ilości lat kredytu");}
           
            if(! getMessages()->hasErrors()){
                if(! is_numeric($this->form->kredyt)) { getMessages()->addError("Kwota kredytu nie jest liczbą"); }
                if(! is_numeric($this->form->lata)) { getMessages()->addError("Długość kredytu w latach nie jest liczbą");} 
            }
            return ! getMessages()->hasErrors();
        }
       
        public function action_calcCompute(){
            $this->getParams();
            
            if ($this->validate()){
                $this->form->kredyt = intval($this->form->kredyt);
                $this->form->lata = intval($this->form->lata);
                $this->form->procent = intval($this->form->procent);
            
                $this->result->msc_kwota = $this->form->kredyt/($this->form->lata*12);
                $this->result->msc_kwota += $this->result->msc_kwota*($this->form->procent/100);
            
                $this->result->msc_kwota = (int) ($this->result->msc_kwota*100)/100;
                
                try {
                    getDB()->insert("kalk", [
                        "amount" => $this->form->kredyt,
                        "years" => $this->form->lata,
                        "interest" => $this->form->procent,
                        "monthly_rate" => $this->result->msc_kwota
                    ]);
                    getMessages()->addInfo('Pomyślnie zapisano rekord');
                } 
                catch (PDOException $ex) {
                    getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                    if (getConf()->debug) {
                        getMessages()->addError($ex->getMessage());
                    }
                }
            }
                 
            $this->generateView();
        }
        
        public function action_calcShow(){
            $this->generateView();
	}
        
        public function generateView(){           
            getSmarty()->assign('user',unserialize($_SESSION['user']));
            
            getSmarty()->assign('page_title','Kalkulator rat');
            getSmarty()->assign('page_description','Kalkulator rat obiektowy');
            getSmarty()->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Ochrona zasobów, routing</p>');
            getSmarty()->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
            
            getSmarty()->assign('form', $this->form);
            getSmarty()->assign('result', $this->result);
            
            getSmarty()->display('CalcView.tpl');
        }
    }