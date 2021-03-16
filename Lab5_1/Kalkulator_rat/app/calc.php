<?php
    require_once dirname(__FILE__).'/../config.php';
    require_once $conf->root_path.'/app/CalcCtrl.class.php';
  
    include $conf->root_path.'/app/security/loginCheck.php';
    
    $ctrl = new CalcCtrl();
    $ctrl->process();