{extends file="main.tpl"}

{block name=content}
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
 {include file="cars.tpl"}

   <!-- services section start  -->

   <section id="services" class="bg-light">

      <div class="container padding-small text-center"style="padding: 70px;">        

    </div>

  </section>



{/block}