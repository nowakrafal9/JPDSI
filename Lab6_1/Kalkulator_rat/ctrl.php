<?php
    require_once 'init.php';

    switch($action){
        default:
            include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
            
            $ctrl = new CalcCtrl();
            $ctrl->generateView();
        break;
        
        case 'compute':
            include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
            
            $ctrl = new CalcCtrl();
            $ctrl->process();
        break;
    
        case 'other_action':
            include_once $conf->root_path.'/app/controllers/ExampleCtrl.class.php';
            
            $ctrl = new ExampleCtrl();
            $ctrl->generateView();
        break;
    }