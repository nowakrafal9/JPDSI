<?php
    require_once dirname(__FILE__).'/../../config.php';
    require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
     
    function getParamsLogin(&$form){
        $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }
    
    function validateLogin(&$form, &$messages){
        if(!(isset($form['login']) && isset($form['pass']))){ return false; }
        
        if($form['login'] == "") { $messages[] = "Nie podano loginu"; }
        if($form['pass'] == "") { $messages[] = "Nie podano hasła"; }
        
        if (count ( $messages ) != 0) { return false; }
        
        if($form['login'] == "user" && $form['pass'] == "user"){
            session_start();
            $_SESSION['user'] = 'user';
            
            return true;
        }
        
        $messages[] = "Niepoprawne dane logowania";
        return false;
    }
    
    $form = array();
    $messages = array();

    getParamsLogin($form);

    $smarty = new Smarty();

    $smarty -> assign('app_url',_APP_URL);
    $smarty -> assign('root_path',_ROOT_PATH); 
    
    $smarty -> assign('page_title','Kalkulator rat');
    $smarty -> assign('page_description','Kalkulator budowany przez szablonowanie Smarty');
    $smarty -> assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Szablony, Smarty</p>');
    $smarty -> assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
    
    if(!validateLogin($form, $messages)){ 
        $smarty -> assign('messages',$messages);
        $smarty -> display(_ROOT_PATH.'/app/security/login.tpl');; 
    }
    else{ header("Location: "._APP_URL); }