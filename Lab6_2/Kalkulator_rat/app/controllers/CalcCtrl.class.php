<?php
    namespace app\controllers;
    
    use app\forms\CalcForm;
    use app\transfer\CalcResult;
    
    class CalcCtrl {
        private $messages;
        private $form;
        private $result;
       
        public function __construct() {
            $this->form = new CalcForm();
            $this->result = new CalcResult();
        }
       
        public function getParams(){
            $this->form->kredyt = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
            $this->form->lata = isset($_REQUEST['il_lat']) ? $_REQUEST['il_lat'] : null;
            $this->form->procent = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
        }
       
        public function validate(){
            if(!(isset($this->form->kredyt) && isset($this->form->lata) && isset($this->form->lata))){
                return false;
            }
           
            if($this->form->kredyt == "") { getMessages()->addError("Nie podano kwoty kredytu");}
            if($this->form->lata == "") { getMessages()->addError("Nie podano ilości lat kredytu");}
           
            if(! getMessages()->isError()){
                if(! is_numeric($this->form->kredyt)) { getMessages()->addError("Kwota kredytu nie jest liczbą"); }
                if(! is_numeric($this->form->lata)) { getMessages()->addError("Długość kredytu w latach nie jest liczbą");} 
            }
            return ! getMessages()->isError();
        }
       
        public function process(){
            $this->getParams();
            
            if ($this->validate()){
                $this->form->kredyt = intval($this->form->kredyt);
                $this->form->lata = intval($this->form->lata);
                $this->form->prcent = intval($this->form->procent);
            
                $this->result->msc_kwota = $this->form->kredyt/($this->form->lata*12);
                $this->result->msc_kwota += $this->result->msc_kwota*($this->form->procent/100);
            
                $this->result->msc_kwota = (int) ($this->result->msc_kwota*100)/100;
            }
            
            $this->generateView();
        }
       
        public function generateView(){           
            getSmarty()->assign('page_title','Kalkulator rat');
            getSmarty()->assign('page_description','Kalkulator rat obiektowy');
            getSmarty()->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Kontroler główny</p>');
            getSmarty()->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
        
            getSmarty()->assign('form', $this->form);
            getSmarty()->assign('result', $this->result);
            
            getSmarty()->display('CalcView.tpl');
        }
    }