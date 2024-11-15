<?php
/* Smarty version 5.4.1, created on 2024-11-15 21:59:37
  from 'file:/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app/CalcView.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6737b639c52720_44530983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0667aad095abdfe7b60dd84950e1661a5576c0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app/CalcView.html',
      1 => 1731703209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6737b639c52720_44530983 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12325310986737b639c3a576_18644822', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13472727636737b639c3e5f9_36305727', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_12325310986737b639c3a576_18644822 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_13472727636737b639c3e5f9_36305727 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app';
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
</div>

<?php
}
}
/* {/block 'content'} */
}
