{extends file="main.tpl"}

{block name=content}

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



{/block}