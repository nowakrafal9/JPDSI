<?php
    require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
    require_once $conf->root_path.'/lib/Messages.class.php';
    require_once $conf->root_path.'/app/CalcForm.class.php';
    require_once $conf->root_path.'/app/CalcResult.class.php';
    
    class CalcCtrl {
        private $messages;
        private $form;
        private $result;
       
        public function __construct() {
            $this->messages = new Messages();
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
           
            if($this->form->kredyt == "") { $this->messages->addError("Nie podano kwoty kredytu");}
            if($this->form->lata == "") { $this->messages->addError("Nie podano ilości lat kredytu");}
           
            if(! $this->messages->isError()){
                if(! is_numeric($this->form->kredyt)) { $this->messages->addError("Kwota kredytu nie jest liczbą"); }
                if(! is_numeric($this->form->lata)) { $this->messages->addError("Długość kredytu w latach nie jest liczbą");} 
            }
            return ! $this->messages->isError();
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
            global $conf;
            
            $smarty = new Smarty(); 
            $smarty->assign('conf',$conf);
            
            $smarty->assign('page_title','Kalkulator rat');
            $smarty->assign('page_description','Kalkulator rat obiektowy');
            $smarty->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Obiektowość</p>');
            $smarty->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
        
            $smarty->assign('messages', $this->messages);
            $smarty->assign('form', $this->form);
            $smarty->assign('result', $this->result);
            
            $smarty->display($conf->root_path.'/app/CalcView.tpl');
        }
    }
