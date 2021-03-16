<?php
/* Smarty version 3.1.39, created on 2021-03-16 12:12:15
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab5_1\Kalkulator_rat\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6050928fd02692_10463178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a025c4d1bb26586cdcdcbc169813598cb682d37e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab5_1\\Kalkulator_rat\\app\\CalcView.tpl',
      1 => 1615889602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6050928fd02692_10463178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4195370776050928fced413_19011778', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11815402066050928fcf12a4_14104548', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7890936946050928fcf1b83_56763352', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_4195370776050928fced413_19011778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4195370776050928fced413_19011778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
<p><a class="btn btn-action btn-lg" href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" role="button">Wyloguj</a></p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_11815402066050928fcf12a4_14104548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11815402066050928fcf12a4_14104548',
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
class Block_7890936946050928fcf1b83_56763352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7890936946050928fcf1b83_56763352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 4em; min-height: 427px">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator rat</legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kredyt;?>
" /> </p>
                <p> <label for = "il_lat">Ilość lat:</label> <input id = "il_lat" type = "text" name = "il_lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" /> </p>
                <p> <label for = "oprocentowanie">Oprocentowanie</label>
                    <select name = "oprocentowanie">
                        <option value = "0" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->procent)) && $_smarty_tpl->tpl_vars['form']->value->procent == 0) {?> selected <?php }?>> 0% </option>
                        <option value = "2" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->procent)) && $_smarty_tpl->tpl_vars['form']->value->procent == 2) {?> selected <?php }?>> 2% </option>
                        <option value = "4" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->procent)) && $_smarty_tpl->tpl_vars['form']->value->procent == 4) {?> selected <?php }?>> 4% </option>
                        <option value = "6" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->procent)) && $_smarty_tpl->tpl_vars['form']->value->procent == 6) {?> selected <?php }?>> 6% </option>
                        <option value = "8" <?php if ((isset($_smarty_tpl->tpl_vars['form']->value->procent)) && $_smarty_tpl->tpl_vars['form']->value->procent == 8) {?> selected <?php }?>> 8% </option>
                    </select>
                </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Oblicz" class="pure-button pure-button-primary"/>          
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
          
        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->msc_kwota))) {?>
            <div style="margin: 1em auto; padding: 1em; border-radius: 0.5em; background-color: #079100; width:20em;">
            Miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['result']->value->msc_kwota;?>

            </div>
        <?php }?>
   </div>   
<?php
}
}
/* {/block 'content'} */
}
