<?php
/* Smarty version 5.4.1, created on 2024-11-08 23:13:38
  from 'file:/Applications/XAMPP/xamppfiles/htdocs/html5up-alpha-kopia/app/calc_cred.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672e8d128540d5_94125746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eddd998b8e103a49d3b391fe330488cf46156fa0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/html5up-alpha-kopia/app/calc_cred.html',
      1 => 1731104016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672e8d128540d5_94125746 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/html5up-alpha-kopia/app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_489333862672e8d12837c07_89481344', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1959168526672e8d1283b703_88840474', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_489333862672e8d12837c07_89481344 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/html5up-alpha-kopia/app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1959168526672e8d1283b703_88840474 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/html5up-alpha-kopia/app';
?>


<!--<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc_cred.php" method="post">
		<fieldset>
	<label for="id_kwota_kredytu">kwota kredytu: </label>
	<input id="kwota_kredytu" type="text" name="kwota_kredytu" value="<?php echo $_smarty_tpl->getValue('form')['kwota_kredytu'];?>
">
	
	
	<label for="id_okres">Na ile lat: </label>
	<input id="okres" type="text" name="okres" value="<?php echo $_smarty_tpl->getValue('form')['okres'];?>
">
	
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	</fieldset>
	<input id="oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')['oprocentowanie'];?>
">
	
		<input type="submit" value="Oblicz rate" class="pure-button pure-button-primary" />
</form>	

</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5"> -->

<section class="box">
       <h3>Kalkulator kredytowy</h3>
            <section>
                    <form method="post" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc_cred.php">
                           
                                        <label for="id_kwota_kredytu">kwota kredytu: </label>
							<input id="kwota_kredytu" type="text" name="kwota_kredytu" value="<?php echo $_smarty_tpl->getValue('form')['kwota_kredytu'];?>
">
	
	
							<label for="id_okres">Na ile lat: </label>
							<input id="okres" type="text" name="okres" value="<?php echo $_smarty_tpl->getValue('form')['okres'];?>
">
	
							<label for="id_oprocentowanie">Oprocentowanie: </label>
								</fieldset>
								<input id="oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->getValue('form')['oprocentowanie'];?>
">
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" style="margin-top: 24px;"></li>
										 

									</ul>
                            
                    </form>

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('result');?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
