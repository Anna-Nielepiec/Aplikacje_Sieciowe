<?php
/* Smarty version 3.1.33, created on 2025-01-19 11:57:04
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678cda807ebd53_82478441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c6101640d1897fb31061d1118ef61ba3d82065f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/home.tpl',
      1 => 1737284220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cars.tpl' => 1,
  ),
),false)) {
function content_678cda807ebd53_82478441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2058061708678cda807e6c09_03495535', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2058061708678cda807e6c09_03495535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2058061708678cda807e6c09_03495535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- hero section start  -->

  <section id="hero" class="position-relative jarallax" style="

        background-image: url(images/Bg.jpg);

        background-repeat: no-repeat;

        background-size: cover;

        background-position: center;

        height: 800px;

      ">

    <div class="container-fluid">

      <div class="hero-content container justify-content-center text-center">

        <div class="row">

          <div class="detail mb-4">

            <h1 class="text-white">Znajdź swój idealny samochód</h1>

          </div>

        </div>

      </div>

    </div>



    <!-- search section start  -->

    <section id="search position-absolute top-50 start-50 translate-middle">

      <div class="container search-block p-5">

        <form class="row">

          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">

            <label for="vehicle" class="label-style text-capitalize form-label text-white">marka</label>

            <div class="input-group date">

              <select class="form-select form-control p-3" id="vehicle" aria-label="Default select example"

                style="background-image: none">

                <option selected>Wybierz marke</option>

                <option value="1">Toyota</option>

                <option value="2">Ford </option>

                <option value="3">Honda</option>

                <option value="4">Porsche</option>

              </select>            

            </div>

          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">

            <label for="location" class="label-style text-capitalize form-label text-white">model</label>

            

            <div class="input-group location text-dark">

              <input type="text" class="form-control p-3 position-relative" placeholder="Wybierz model" id="location">             

            </div>

          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">

            <label for="pick-up-date" class="label-style text-capitalize form-label text-white">Nadwozie</label>

            <div class="input-group date" id="datepicker1">

              <input type="text" class="form-control p-3"placeholder="Wybierz nadwozie" id="location" id="pick-up-date" />

            </div>

          </div>

          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">

            <label for="return-date" class="label-style text-capitalize form-label text-white">Na ile dni</label>

            <div class="input-group date" id="datepicker2">

              <input type="text" class="form-control p-3" id="return-date" />

            </div>

          </div>

        </form>



        <div class="d-grid gap-2 mt-4">

          <button class="btn btn-primary" type="button">Znajdź samochód</button>

        </div>

      </div>

    </section>

  </section>
 <?php $_smarty_tpl->_subTemplateRender("file:cars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <!-- services section start  -->

   <section id="services" class="bg-light">

      <div class="container padding-small text-center"style="padding: 70px;">        

    </div>

  </section>



<?php
}
}
/* {/block 'content'} */
}
