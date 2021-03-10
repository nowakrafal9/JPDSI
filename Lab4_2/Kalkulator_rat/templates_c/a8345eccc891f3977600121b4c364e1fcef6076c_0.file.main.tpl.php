<?php
/* Smarty version 3.1.39, created on 2021-03-10 13:13:31
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab4_2\Kalkulator_rat\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6048b7eb742f44_01527283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8345eccc891f3977600121b4c364e1fcef6076c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab4_2\\Kalkulator_rat\\templates\\main.tpl',
      1 => 1615375884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048b7eb742f44_01527283 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main.css">
    </head>
    
    <body class="home">
	
	<header id="head">
		<div class="container">
			<div class="row">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11560346496048b7eb7418b4_76007697', 'header');
?>

			</div>
		</div>
	</header>  
        <div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20576109746048b7eb7421e0_57180775', 'content');
?>

        </div>
        <footer id="footer" class="top-space">
        <div class="footer1">
            <div class ="container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641486326048b7eb742865_00210108', 'footer');
?>

            </div>
        </div> 
    </body>
</html>
<?php }
/* {block 'header'} */
class Block_11560346496048b7eb7418b4_76007697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_11560346496048b7eb7418b4_76007697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówka .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_20576109746048b7eb7421e0_57180775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20576109746048b7eb7421e0_57180775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_641486326048b7eb742865_00210108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_641486326048b7eb742865_00210108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
