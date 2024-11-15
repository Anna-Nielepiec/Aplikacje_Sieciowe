<?php
/* Smarty version 5.4.1, created on 2024-11-15 21:59:37
  from 'file:/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app/../templates/main.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_6737b639c6add4_31999180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bf895c3ea79dfa55a4e2cb837541e6ae7405692' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/app/../templates/main.html',
      1 => 1731703140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6737b639c6add4_31999180 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/style.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
					<nav id="nav">
						<ul>
							<li><a href="#">Home</a></li>	
							<li>
								<a href="#">Elements</a></li>
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
					<p><?php echo (($tmp = $_smarty_tpl->getValue('page_description') ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</p>
					<ul class="actions special">
						<li><a href="#main" class="button primary">Przejdz do kalkulatora</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">
				
					<section class="box">
                        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_14722944256737b639c69d63_47063932', 'content');
?>

					</section>

			<!-- Footer -->
				<footer id="footer">					
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>

</html><?php }
/* {block 'content'} */
class Block_14722944256737b639c69d63_47063932 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/php_05_obiektowosc-kopia/templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
