<?php
    require_once dirname(__FILE__).'/../config.php';
    include _ROOT_PATH.'/app/security/check.php';

    function getParams(&$kredyt, &$lata, &$procent){
        $kredyt = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
        $lata = isset($_REQUEST['il_lat']) ? $_REQUEST['il_lat'] : null;
        $procent = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
    }
    
    function validate(&$kredyt, &$lata, &$procent, &$messages){
        if(! (isset($kredyt) && isset($lata) && isset($procent))){ return false; }
        
        if ($kredyt == "") { $messages [] = 'Nie podano kwoty kredytu'; }
        if ($lata == "") { $messages [] = "Nie podano ilości lat kredytu"; }

        if (count($messages) != 0) { return false; }
        
        if(! is_numeric($kredyt)) { $messages [] = "Kwota kredytu nie jest liczbą"; }
	if(! is_numeric($lata)) { $messages [] = "Długość kredytu w latach nie jest liczbą";} 
        
        if (count($messages) != 0) { return false; }
        
        return true;
    }
    
    function process(&$kredyt, &$lata, &$procent, &$msc_kwota, &$messages){
        $kredyt = intval($kredyt);
        $lata = intval($lata);
        $procent = intval($procent);
		
	$msc_kwota = $kredyt/($lata*12);
	$msc_kwota += $msc_kwota*($procent/100);
        $pom = (int)($msc_kwota*100)/100;
        $msc_kwota = $pom;
    }
    
    function out(&$param){
	if (isset($param)){
		echo $param;
	}
    }
    
    $kredyt = null;
    $lata = null;
    $procent = null;
    $msc_kwota = null;
    $messages[];
   
    getParams($kredyt, $lata, $procent);
    if ( validate($kredyt, $lata, $procent, $messages) ) { 
	process($kredyt, $lata, $procent, $msc_kwota, $messages);
    }
    
    include 'calc_view.php';
    