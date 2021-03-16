<?php
/* Smarty version 3.1.39, created on 2021-03-16 12:12:15
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab5_1\Kalkulator_rat\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6050928fd18b32_53770855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd07e6c1d644831930fcc3347b80b97c54af629' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab5_1\\Kalkulator_rat\\templates\\main.tpl',
      1 => 1615888466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6050928fd18b32_53770855 (Smarty_Internal_Template $_smarty_tpl) {
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
/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">
    </head>
    <body class="home">
	<header id="head">
            <div class="container">
                <div class="row">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2531362926050928fd16f50_88680930', 'header');
?>

		</div>
            </div>
	</header>
                
        <div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10565188416050928fd17959_46649020', 'content');
?>

        </div>
        
        <footer id="footer" class="top-space">
            <div class="footer1">
                <div class ="container">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7150967226050928fd181f9_58395707', 'footer');
?>

                </div>
            </div>
        </footer>
    </body>
</html><?php }
/* {block 'header'} */
class Block_2531362926050928fd16f50_88680930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2531362926050928fd16f50_88680930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść nagłówka .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_10565188416050928fd17959_46649020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10565188416050928fd17959_46649020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_7150967226050928fd181f9_58395707 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7150967226050928fd181f9_58395707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
