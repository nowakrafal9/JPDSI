<?php
/* Smarty version 3.1.39, created on 2021-03-16 13:03:55
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab5_1\Kalkulator_rat\app\security\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60509eabca70b6_78689106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2be04435e8b764afc68dc7626c02ba97bcf90ab3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab5_1\\Kalkulator_rat\\app\\security\\loginView.tpl',
      1 => 1615896125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60509eabca70b6_78689106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123284784960509eabc9c2b8_44771421', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144610882260509eabc9f095_17888069', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146475626960509eabc9f926_29192029', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'header'} */
class Block_123284784960509eabc9c2b8_44771421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_123284784960509eabc9c2b8_44771421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
 <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_144610882260509eabc9f095_17888069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_144610882260509eabc9f095_17888069',
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
class Block_146475626960509eabc9f926_29192029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_146475626960509eabc9f926_29192029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style = "width:90%; margin: 4em auto; min-height: 427px">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php" method="post" class="pure-form pure-form-stacked">
            <legend>Zaloguj się aby użyć kalkulator</legend>
            <fieldset>
                <p> <label for = "login">Login:</label> <input id = "login" type = "text" name = "login" /> </p>
                <p> <label for = "pass">Password:</label> <input id = "pass" type = "password" name = "pass" /> </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Zaloguj" class="pure-button pure-button-primary"/>          
        </form>    
            
        <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
		<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                     <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li> 
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
