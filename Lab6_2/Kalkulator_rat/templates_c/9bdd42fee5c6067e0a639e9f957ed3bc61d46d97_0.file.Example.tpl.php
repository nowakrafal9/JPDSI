<?php
/* Smarty version 3.1.39, created on 2021-03-23 11:56:32
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab6_2\Kalkulator_rat\app\view\Example.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059c960bd3626_31080044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bdd42fee5c6067e0a639e9f957ed3bc61d46d97' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab6_2\\Kalkulator_rat\\app\\view\\Example.tpl',
      1 => 1616496599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059c960bd3626_31080044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17168609196059c960bce572_65847863', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6649199306059c960bd26a4_94848349', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10033274306059c960bd2f87_58571103', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_17168609196059c960bce572_65847863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_17168609196059c960bce572_65847863',
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
class Block_6649199306059c960bd26a4_94848349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6649199306059c960bd26a4_94848349',
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
class Block_10033274306059c960bd2f87_58571103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10033274306059c960bd2f87_58571103',
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
