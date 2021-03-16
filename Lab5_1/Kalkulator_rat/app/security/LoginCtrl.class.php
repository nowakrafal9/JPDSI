<?php
    require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
    require_once $conf->root_path.'/lib/Messages.class.php';
    require_once $conf->root_path.'/app/security/LoginForm.class.php';
    
    class LoginCtrl{
        private $messages;
        private $logForm;
          
        public function __construct() {
            $this->messages = new Messages();
            $this->logForm = new LoginForm();
        }
        
        public function getParams(){
            $this->logForm->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
            $this->logForm->passwd = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
        }
        
        public function validate(){
            if(!(isset($this->logForm->login) && isset($this->logForm->passwd))){ return false; }
            
            if($this->logForm->login == "") { $this->messages->addError("Nie podano loginu"); }
            if($this->logForm->passwd == "") { $this->messages->addError("Nie podano hasła"); }
            
            if($this->messages->isError()) { return false; }
            
            if($this->logForm->login == "user" && $this->logForm->passwd == "user"){
                session_start();
                $_SESSION['user'] = 'user';     
                return true;
            }
            
            $this->messages->addError("Niepoprawne dane logowania");
            return false;
        }
        
        public function process(){
            global $conf;
            
            $this->getParams();
            
            $smarty = new Smarty();
            
            $smarty->assign('conf',$conf);
            
            $smarty->assign('page_title','Kalkulator rat');
            $smarty->assign('page_description','Kalkulator rat obiektowy');
            $smarty->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Obiektowość</p>');
            $smarty->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
        
            $smarty->assign('messages', $this->messages);
            $smarty->assign('logForm', $this->logForm);
            
            if(!$this->validate()){
                $smarty->display($conf->root_path.'/app/security/LoginView.tpl');
            }
            else{ header("Location: ".$conf->app_url); }
        }
    }
