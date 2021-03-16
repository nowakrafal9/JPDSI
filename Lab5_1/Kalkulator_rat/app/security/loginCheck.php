<?php
    require_once dirname(__FILE__).'/../../config.php';
    
    session_start();
    
    $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';

    if(empty($user)){
        include $conf->root_path.'/app/security/login.php';
        exit();
    }