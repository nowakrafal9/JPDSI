<?php
	require_once dirname(__FILE__).'/../config.php';

	$kredyt = $_REQUEST['kredyt'];
	$lata = $_REQUEST['il_lat'];
	$procent = $_REQUEST['oprocentowanie'];

	if(! (isset($kredyt) && isset($lata) && isset($procent))){
		$messages[] = "Błąd wywołania aplikacji. Brak jednego z parametrów";
	}
	
	if($kredyt == "")
		$messages [] = "Nie podano kwoty kredytu";
	if($lata == "")
		$messages [] = "Nie podano ilości lat kredytu";
		
	if(empty($messages)){
		if(! is_numeric($kredyt))
			$messages [] = "Kwota kredytu nie jest liczbą";
		if(! is_numeric($lata))
			$messages [] = "Długość kredytu w latach nie jest liczbą";
	}
	
	if(empty($messages)){
		$kredyt = intval($kredyt);
		$lata = intval($lata);
		$procent = intval($procent);
		
		$msc_kwota = $kredyt/($lata*12);
		$msc_kwota += $msc_kwota*($procent/100);
	}
	
	include 'kalk_widok.php';
?>