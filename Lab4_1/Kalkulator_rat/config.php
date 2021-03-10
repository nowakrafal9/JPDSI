<?php
    define('_SERVER_NAME', 'localhost');
    define('_SERVER_URL', 'http://'._SERVER_NAME);
    define('_APP_ROOT', '/pliki/JPDSI/Lab4_1/Kalkulator_rat');
    define('_APP_URL', _SERVER_URL._APP_ROOT);
    define('_ROOT_PATH', dirname(__FILE__));
    
    $page_title = 'Kalkulator rat';
    $page_description = 'Kalkulator budowany przez dołączenie części HTML';
    $page_header = 'Prosty szablon';
    $page_footer = 'stopka';
    
    function out(&$param){
	if (isset($param)){
		echo $param;
	}
    }