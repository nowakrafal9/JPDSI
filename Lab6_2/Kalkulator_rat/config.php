<?php
    $conf->root_path = dirname(__FILE__);
    $conf->server_name = 'localhost';
    $conf->server_url = 'http://'.$conf->server_name;
    $conf->app_root = '/pliki/JPDSI/Lab6_2/Kalkulator_rat';
    $conf->app_url = $conf->server_url.$conf->app_root;
    
    $conf->action_root = $conf->app_root.'/ctrl.php?action=';
    $conf->action_url = $conf->server_url.$conf->action_root;

