<?php
/* Smarty version 3.1.33, created on 2025-01-19 21:01:06
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/car_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678d5a02701015_50628416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e9a8063bdf5cbdde7e73774a7e5ed22580841d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/car_details.tpl',
      1 => 1737316862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678d5a02701015_50628416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531666749678d5a026dd261_40485703', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_531666749678d5a026dd261_40485703 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_531666749678d5a026dd261_40485703',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark">

       <?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>


      </h2>

      <div class="row">

      

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="" class="blog-img"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['car']->value['images'][0];?>
" alt="" class="img-fluid" /></a>

            </div>
<h4><?php echo $_smarty_tpl->tpl_vars['car']->value['brand'];?>
 <?php echo $_smarty_tpl->tpl_vars['car']->value['model'];?>
 </h4> 
           
                 <?php if ($_smarty_tpl->tpl_vars['car']->value['status'] == "available") {?>
                  <div class="text-center text-dark text-uppercase">

              <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'rent','id'=>$_smarty_tpl->tpl_vars['car']->value['id']),$_smarty_tpl ) );?>
">
                Rezerwuj
                </a>

                 </div>
<h4> dostepny </h4> 
<?php } else { ?>
<h4> niedostepny </h4> 
<?php }?>
            <div class="text-center ">

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
 </div>

        </div> 

      </div>

    </div>

  </section>
  <?php
}
}
/* {/block 'content'} */
}
