<?php
/* Smarty version 3.1.39, created on 2021-03-10 13:13:33
  from 'D:\xampp\htdocs\pliki\JPDSI\Lab4_2\Kalkulator_rat\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6048b7ed2f10c3_87420816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ddb04f2bec24667a0da8eeeeddf4fc34c40afb5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\pliki\\JPDSI\\Lab4_2\\Kalkulator_rat\\app\\calc.tpl',
      1 => 1615375914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6048b7ed2f10c3_87420816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2680600976048b7ed2dee60_31521188', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4253363536048b7ed2e1ea8_87064324', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8226473626048b7ed2e2713_96275455', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_2680600976048b7ed2dee60_31521188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2680600976048b7ed2dee60_31521188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
 <p><a class="btn btn-action btn-lg" href = "<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" role="button">Wyloguj</a></p> <?php
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_4253363536048b7ed2e1ea8_87064324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4253363536048b7ed2e1ea8_87064324',
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
class Block_8226473626048b7ed2e2713_96275455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8226473626048b7ed2e2713_96275455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="width:90%; margin: 4em; min-height: 427px">
        <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <legend>Kalkulator rat</legend>
            <fieldset>
                <p> <label for = "kredyt">Kwota kredytu: </label> <input id = "kredyt" type = "text" name = "kredyt" value="<?php echo $_smarty_tpl->tpl_vars['formCalc']->value['kredyt'];?>
" /> </p>
                <p> <label for = "il_lat">Ilość lat:</label> <input id = "il_lat" type = "text" name = "il_lat" value="<?php echo $_smarty_tpl->tpl_vars['formCalc']->value['lata'];?>
" /> </p>
                <p> <label for = "oprocentowanie">Oprocentowanie</label>
                    <select name = "oprocentowanie">
                        <option value = "0" <?php if ((isset($_smarty_tpl->tpl_vars['formCalc']->value['procent'])) && $_smarty_tpl->tpl_vars['formCalc']->value['procent'] == 0) {?> selected<?php }?>> 0% </option>
                        <option value = "2" <?php if ((isset($_smarty_tpl->tpl_vars['formCalc']->value['procent'])) && $_smarty_tpl->tpl_vars['formCalc']->value['procent'] == 2) {?> selected<?php }?>> 2% </option>
                        <option value = "4" <?php if ((isset($_smarty_tpl->tpl_vars['formCalc']->value['procent'])) && $_smarty_tpl->tpl_vars['formCalc']->value['procent'] == 4) {?> selected<?php }?>> 4% </option>
                        <option value = "6" <?php if ((isset($_smarty_tpl->tpl_vars['formCalc']->value['procent'])) && $_smarty_tpl->tpl_vars['formCalc']->value['procent'] == 6) {?> selected<?php }?>> 6% </option>
                        <option value = "8" <?php if ((isset($_smarty_tpl->tpl_vars['formCalc']->value['procent'])) && $_smarty_tpl->tpl_vars['formCalc']->value['procent'] == 8) {?> selected<?php }?>> 8% </option>
                    </select>
                </p>
            </fieldset>
            <input class="btn btn-default btn-lg" type = "submit" value = "Oblicz" class="pure-button pure-button-primary"/>          
        </form>
         
        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<ol style = "margin: 2em auto; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #C81910; width: 30em;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                     <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li> 
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
            <?php }?>
        <?php }?>
          
        <?php if ((isset($_smarty_tpl->tpl_vars['msc_kwota']->value))) {?>
            <div style="margin: 1em auto; padding: 1em; border-radius: 0.5em; background-color: #079100; width:20em;">
            Miesięczna rata wynosi: <?php echo $_smarty_tpl->tpl_vars['msc_kwota']->value;?>

            </div>
        <?php }?>
   </div>   
<?php
}
}
/* {/block 'content'} */
}
