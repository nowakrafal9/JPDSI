<?php
/* Smarty version 3.1.39, created on 2021-03-10 13:49:45
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab4_2\Kalkulator_rat\app\calc.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6048c06914cda5_74475508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc42354c3d88bb855abd054c6659814c757d9a17' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab4_2\\Kalkulator_rat\\app\\calc.php',
      1 => 1615380154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048c06914cda5_74475508 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
    ';?>
require_once dirname(__FILE__).'/../config.php';
    require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
    
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
    
    $smarty = new Smarty();

    $smarty -> assign('app_url',_APP_URL);
    $smarty -> assign('root_path',_ROOT_PATH); 
    
    $smarty -> assign('page_title','Kalkulator rat');
    $smarty -> assign('page_description','Kalkulator budowany przez szablonowanie Smarty');
    $smarty -> assign('page_header','<h1 class="lead">Kalkulator rat</h1> <p class="tagline">Szablony, Smarty</p>');
    $smarty -> assign('page_footer','Kalkulator rat oparty na szablonie <a href="https://www.gettemplate.com/info/progressus/">Progressus</a>');
    
    $smarty -> assign('formCalc',$formCalc);
    $smarty -> assign('msc_kwota',$msc_kwota);
    $smarty -> assign('messages',$messages);

    $smarty->display(_ROOT_PATH.'/app/calc.tpl');<?php }
}
