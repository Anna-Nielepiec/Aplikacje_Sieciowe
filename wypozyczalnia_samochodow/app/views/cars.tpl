

 <!-- Great cars section start  -->

  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark">

        Samochody do wynajęcia

      </h2>

      <div class="row">

      {foreach $cars as $car}

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="{url action='car_details' id=$car.id}" class="blog-img"><img src="{$conf->app_url}/{$car.main_image}" alt="" class="img-fluid" /></a>

            </div>

            <div class="text-center text-dark text-uppercase">

              <a href="#">

                <h4>{$car.brand}</h4>

              </a>

            </div>
 </div>

        </div>
          

          {/foreach}
         

      

       

      </div>

    </div>

  </section>
