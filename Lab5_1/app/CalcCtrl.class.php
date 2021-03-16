<?php
    require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
    require_once $conf->root_path.'/lib/Messages.class.php';
    require_once $conf->root_path.'app/CalcForm.class.php';
    require_once $conf->root_path.'app/CalcResult.class.php';
    
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
           /*
            * 
            * To do: dokończyć funkcje validate()
            * 
            */
       }
       
       public function process(){
           /* 
            * 
            * To do: napisać funkcje process()
            * 
            */
       }
       
       public function generateView(){
           /*
            * 
            * To do: napisać funkcje generateView()
            * 
            */
       }
    }
