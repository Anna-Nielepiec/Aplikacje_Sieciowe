<?php
/* Smarty version 5.4.1, created on 2024-11-20 22:23:08
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673e533c922a12_81050933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee26382d7e6767f89a3eb229dcfd0b5936e9cd8' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1732136764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673e533c922a12_81050933 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_06_namespaces-kopia/app/views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9804357673e533c8ffc19_78568261', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1358361083673e533c906f54_74963681', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_9804357673e533c8ffc19_78568261 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_06_namespaces-kopia/app/views';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1358361083673e533c906f54_74963681 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_06_namespaces-kopia/app/views';
?>


<header class="major">
 <h2>Kalkulator kredytowy</h2>
 </header>

<div class="row gtr-uniform gtr-50">
<div class="col-6">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/calc.php" method="post">
		<fieldset>
		
		 <div class="row gtr-uniform gtr-50">
			<div class="col-12">
				<label for="id_kwota_kredytu">kwota kredytu: </label>
				<input id="kwota_kredytu" type="text" name="kwota_kredytu" value="<?php echo $_smarty_tpl->getValue('form')->kwota_kredytu;?>
">
			</div>
			
			<div class="col-12">
                <label for="id_okres">Na ile lat: </label>
                <input id="okres" type="text" name="okres" value="<?php echo $_smarty_tpl->getValue('form')->okres;?>
">
            </div>
			
			<div class="col-12">
                <label for="id_oprocentowanie">Oprocentowanie: </label>
                <input id="oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')->oprocentowanie;?>
">
            </div>	
			
<!--<?php if ((null !== ($_smarty_tpl->getValue('res')->op_name ?? null))) {?>
<option value="<?php echo $_smarty_tpl->getValue('form')->oprocentowanie;?>
">ponownie: <?php echo $_smarty_tpl->getValue('res')->op_name;?>
</option>
<option value="" disabled="true">---</option>
<?php }?>-->
			<div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Oblicz rate"/></li>
                </ul>
            </div>
			
		</fieldset>
	</form>
</div>

<div class="col-6">

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('res')->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
