

 <!-- Great cars section start  -->

  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark pt-5">

        Samochody do wynajęcia

      </h2>

      <div class="row">

      {foreach $cars as $car}

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="{url action='car_details' id=$car.id}" class="ratio ratio-4x3"><img src="{$conf->app_url}/{$car.main_image}" alt="" class="img-fluid object-fit-cover" /></a>

            </div>

            <div class="text-center text-dark text-uppercase pt-2">

                <h4>{$car.brand} {$car.model}</h4>

            </div>
 </div>

        </div>
          

          {/foreach}
         

      

       

      </div>

    </div>

  </section>
