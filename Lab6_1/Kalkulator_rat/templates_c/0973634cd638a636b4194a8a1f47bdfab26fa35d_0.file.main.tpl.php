<?php
/* Smarty version 3.1.39, created on 2021-03-23 09:21:04
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab6_1\Kalkulator_rat\app\view\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059a4f07ac717_66869524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0973634cd638a636b4194a8a1f47bdfab26fa35d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab6_1\\Kalkulator_rat\\app\\view\\templates\\main.tpl',
      1 => 1616487435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059a4f07ac717_66869524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
        
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/site_style/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/site_style/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/site_style/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/site_style/css/main.css">
    </head>
    <body class="home">
	<header id="head">
            <div class="container">
                <div class="row">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16051199156059a4f07ab3d5_44233621', 'header');
?>

		</div>
            </div>
	</header>
                
        <div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13022795576059a4f07abb37_07327809', 'content');
?>

        </div>
        
        <footer id="footer" class="top-space">
            <div class="footer1">
                <div class ="container">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16093194426059a4f07ac121_10811296', 'footer');
?>

                </div>
            </div>
        </footer>
    </body>
</html><?php }
/* {block 'header'} */
class Block_16051199156059a4f07ab3d5_44233621 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16051199156059a4f07ab3d5_44233621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówka .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_13022795576059a4f07abb37_07327809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13022795576059a4f07abb37_07327809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_16093194426059a4f07ac121_10811296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16093194426059a4f07ac121_10811296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
