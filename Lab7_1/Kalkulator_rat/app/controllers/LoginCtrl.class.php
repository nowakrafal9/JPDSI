<?php
    namespace app\controllers;
    
    use app\transfer\User;
    use app\forms\LoginForm;

    class LoginCtrl{
        private $form;

        public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function getParams(){
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}

        public function validate(){
            if(!(isset($this->form->login) && isset($this->form->pass))){ getMessages()->addError('Błędne wywołanie aplikacji !'); }
            
            if($this->form->login == "") { getMessages()->addError("Nie podano loginu"); }
            if($this->form->pass == "") { getMessages()->addError("Nie podano hasła"); }
            
            if(!getMessages()->isError()) {
                if($this->form->login == "user" && $this->form->pass == "user"){
                    if(session_status() == PHP_SESSION_NONE){
                        session_start();
                    }
                    $user = new User($this->form->login, 'user');
                    $_SESSION['user'] = serialize($user);
                } else if ($this->form->login == "admin" && $this->form->pass == "admin") {
                    if(session_status() == PHP_SESSION_NONE){
                        session_start();
                    }
                    $user = new User($this->form->login, 'admin');
                    $_SESSION['user'] = serialize($user);
                } else{
                    getMessages()->addError("Niepoprawne dane logowania");
                }        
            }
            return ! getMessages()->isError();
        }
        
        public function doLogin() {
            $this->getParams();
            
            if ($this->validate()){
                header("Location: ".getConf()->app_url."/");
            } else {
                $this->generateView(); 
            }
        }
        
        public function doLogout(){
            if (session_status() == PHP_SESSION_NONE) {
                    session_start();
            }
            session_destroy();

            $this->generateView();		 
	}
	
	public function generateView(){
            getSmarty()->assign('page_title','Kalkulator rat');
            getSmarty()->assign('page_description','Kalkulator rat obiektowy');
            getSmarty()->assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Kontroler główny</p>');
            getSmarty()->assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
            
            getSmarty()->assign('form',$this->form);
            getSmarty()->display('LoginView.tpl');		
	}
    }