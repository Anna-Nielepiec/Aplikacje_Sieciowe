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
        <form class="row g-3" action="{$conf->action_root}find_brand" method="post">
    <fieldset>
<div class="row">
           <div class="col">
            <input type="text" class="label-style id="brand" name="brand" text-capitalize form-label text-white">marka/>
            <input type="hidden" id="page" name="page" value="1" />
              <button type="submit" class="form-select form-control p-3" aria-label="Default select example" style="background-image: none">

                
              </select>            
            </div>

          

           <div class="col">
            <label for="search_model" class="label-style text-capitalize form-label text-white">model</label>
            <select class="form-select form-control p-3" id="search_model" name="search_model" required>
            style="background-image: none">
                <option selected >wybierz model</option>
                <option value="Corolla">Corolla</option>
                <option value="Fiesta">Fiesta</option>
                <option value="Civic">Civic</option>
                <option value="911">911</option>            
            </select>
          </div>

          
          </fieldset>
        </form>

        <div class="d-grid gap-2 mt-4">
          <button class="btn btn-primary" type="submit">Znajdź samochód</button>
        </div>

      </div>

    </section>

  </section>
 
 {include file="cars.tpl"}

  </section>



{/block}