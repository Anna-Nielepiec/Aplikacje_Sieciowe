<?php
/* Smarty version 3.1.33, created on 2025-01-19 19:26:03
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678d43bb7d0220_38314546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4453177659fa56f3fda0de10c4c14bdba0a8929f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Logowanie.tpl',
      1 => 1737311123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d43bb7d0220_38314546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1708973436678d43bb7b62c8_82465024', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1708973436678d43bb7b62c8_82465024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1708973436678d43bb7b62c8_82465024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section id="search position-absolute top-50 start-50 translate-middle">
      <div class="container search-block p-5">

<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logowanie" class "row">
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="login" class="label-style text-capitalize form-label text-dark">login</label>
            
            <div class="input-group location text-dark">
              <input type="text" name="login" class="form-control p-3 position-relative" placeholder="Wpisz login" id="login">             
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="pass" class="label-style text-capitalize form-label text-dark">Hasło</label>            
            <div class="input-group date">
              <input type="password" name="pass" class="form-control p-3"placeholder="Wpisz hasło" id="pass">
            </div>
          </div>
   <div class="d-flex gap-3 mt-4">
  
          <button class="btn btn-primary" type="submit">Zaloguj się</button>
          <button class="btn btn-dark" type="button">Przypomnij hasło</button>         
  </div>
  </form>

   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>      
 
  </div>
  </section>

<?php
}
}
/* {/block 'content'} */
}
