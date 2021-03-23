<?php
/* Smarty version 3.1.39, created on 2021-03-23 09:23:36
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab6_1\Kalkulator_rat\app\view\Example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059a588533481_12587723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '624081e7c03611eda13be19d6d99fcca477a59f5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab6_1\\Kalkulator_rat\\app\\view\\Example.tpl',
      1 => 1616487466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059a588533481_12587723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6629429786059a58852e439_73853753', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1994213816059a588532605_20458580', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9837666436059a588532e82_70503186', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_6629429786059a58852e439_73853753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6629429786059a58852e439_73853753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
<p><a class="btn btn-action btn-lg" href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
" role="button">Powrót</a></p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1994213816059a588532605_20458580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1994213816059a588532605_20458580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['page_footer']->value;?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9837666436059a588532e82_70503186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9837666436059a588532e82_70503186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 4em; min-height: 427px">
        <p>Przykładowa strona</p>
   </div>   
<?php
}
}
/* {/block 'content'} */
}
