<?php
    require_once 'init.php';

    switch($action){
        default:
            include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
            
            $ctrl = new app\controllers\CalcCtrl();
            $ctrl->generateView();
        break;
        
        case 'compute':
            include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
            
            $ctrl = new app\controllers\CalcCtrl();
            $ctrl->process();
        break;
    
        case 'other_action':
            include_once $conf->root_path.'/app/controllers/ExampleCtrl.class.php';
            
            $ctrl = new app\controllers\ExampleCtrl();
            $ctrl->generateView();
        break;
    }