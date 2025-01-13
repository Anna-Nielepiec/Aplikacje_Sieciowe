<?php
/* Smarty version 3.1.33, created on 2025-01-13 21:44:26
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_/app/views/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_67857b2a1c3576_47888030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a92ae6d40908f3ac2e668628d59f7fdaf88727b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_/app/views/home.tpl',
      1 => 1736546030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67857b2a1c3576_47888030 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30262012967857b2a1c1e44_30824357', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_30262012967857b2a1c1e44_30824357 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30262012967857b2a1c1e44_30824357',
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

                <option value="1">BMW</option>

                <option value="2">Ford </option>

                <option value="3">Ferrari</option>

                <option value="4">Mercedes-Benz</option>

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

  <!-- Great cars section start  -->

  <section id="card ">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark">

        Samochody do wynajęcia

      </h2>

      <div class="row">

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-1.jpg" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>hyundai</h4>

              </a>

            </div>

          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="blog-post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-2.jpg" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>jeep</h4>

              </a>

            </div>

          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="blog-post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-3.jpg" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>bmw</h4>

              </a>

            </div>

          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="blog-post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-4.jpg" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>benz</h4>

              </a>

            </div>

          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="blog-post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-5.jpg" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>ford</h4>

              </a>

            </div>

          </div>

        </div>

        <div class="col-md-6 col-lg-4">

          <div class="blog-post pt-5 pb-3">

            <div class="image-zoom">

              <a href="blog-single.html" class="blog-img"><img src="images/rental-6.jpg" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>range rover</h4>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>


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
