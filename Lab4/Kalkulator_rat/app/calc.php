<?php
    require_once dirname(__FILE__).'/../config.php';
     
    include _ROOT_PATH.'/app/security/check.php';
    
    function getParams(&$formCalc){
        $formCalc['kredyt'] = isset($_REQUEST['kredyt']) ? $_REQUEST['kredyt'] : null;
        $formCalc['lata'] = isset($_REQUEST['il_lat']) ? $_REQUEST['il_lat'] : null;
        $formCalc['procent'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
    }
    
    function validate(&$formCalc, &$messages){
        if(! (isset($formCalc['kredyt']) && isset($formCalc['lata']) && isset($formCalc['procent']))){ return false; }
        
        if ($formCalc['kredyt'] == "") { $messages [] = 'Nie podano kwoty kredytu'; }
        if ($formCalc['lata'] == "") { $messages [] = "Nie podano ilości lat kredytu"; }

        if (count($messages) != 0) { return false; }
        
        if(! is_numeric($formCalc['kredyt'])) { $messages [] = "Kwota kredytu nie jest liczbą"; }
	if(! is_numeric($formCalc['lata'])) { $messages [] = "Długość kredytu w latach nie jest liczbą";} 
        
        if (count($messages) != 0) { return false; }
        
        return true;
    }
    
    function process(&$formCalc, &$msc_kwota, &$messages){
        $formCalc['kredyt'] = intval($formCalc['kredyt']);
        $formCalc['lata'] = intval($formCalc['lata']);
        $formCalc['procent'] = intval($formCalc['procent']);
		
	$msc_kwota = $formCalc['kredyt']/($formCalc['lata']*12);
	$msc_kwota += $msc_kwota*($formCalc['procent']/100);
        
        $pom = (int)($msc_kwota*100)/100;
        $msc_kwota = $pom;
    }
    
    $formCalc = array();
    $msc_kwota = null;
    $messages = array();
    
    getParams($formCalc);
    if ( validate($formCalc, $messages) ) { 
	process($formCalc, $msc_kwota, $messages);
    }
    
    include 'calc_view.php';