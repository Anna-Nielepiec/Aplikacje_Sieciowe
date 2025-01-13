<?php
/* Smarty version 3.1.33, created on 2025-01-13 21:44:26
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_/app/views/Logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67857b2a13ff32_46016020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c621d41a6b9314453deb611ffa2341bcca9c7c46' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_/app/views/Logowanie.tpl',
      1 => 1736707572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67857b2a13ff32_46016020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65187956267857b2a134ca1_28029579', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_65187956267857b2a134ca1_28029579 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_65187956267857b2a134ca1_28029579',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="search position-absolute top-50 start-50 translate-middle">
      <div class="container search-block p-5">
<form class="row">
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="location" class="label-style text-capitalize form-label text-dark">login</label>
            
            <div class="input-group location text-dark">
              <input type="text" class="form-control p-3 position-relative" placeholder="Wpisz login" id="location">             
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="pick-up-date" class="label-style text-capitalize form-label text-dark">Hasło</label>            
            <div class="input-group date" id="datepicker1">
              <input type="password" name="pass" id="pass" class="form-control p-3"placeholder="Wpisz hasło" id="location" id="pick-up-date" />
            </div>
          </div>
  </form>
  <div class="d-flex gap-3 mt-4">
  
          <button class="btn btn-primary" type="button">Zaloguj się</button>
          <button class="btn btn-dark" type="button">Przypomnij hasło</button>
          
  </div>
  </div>

  
  </section>



<?php
}
}
/* {/block 'content'} */
}
