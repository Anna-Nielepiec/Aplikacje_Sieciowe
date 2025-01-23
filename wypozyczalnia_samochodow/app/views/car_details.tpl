{extends file="main.tpl"}
{block name=content}

  <section id="card">

    <div class="container ">

        <h2 class="text-uppercase text-center text-dark">{$page_title}</h2>

        <div class="row py-3">

            <div class="col py-3">
                <div class="image-zoom">
                    <a href="" class="ratio ratio-4x3"><img src="{$conf->app_url}/{$car.images[0]}" alt="" class="img-fluid object-fit-cover" /></a>
                </div>
            </div>

            <div class="col">
                <div class="post py-4">
                    <h3>{$car.brand} {$car.model} </h3> 
                    <div>Numer rejestracyjny: {$car.registration_number}</div>

                    <div class="pt-5 pb-2">Cena za dzień: <span class="fs-5">{$car.price_per_day} zł</span></div>

                    <div class="pt-3">
                      {if isset($login) && \core\RoleUtils::inRole("user")}
                        {if $status == "available"}
                          <h5> dostępny </h5>
                          <div class="text-dark text-uppercase mt-5">
                              <a href="{url action='rent' id=$car.id}" type="button" class="btn btn-primary px-4">Wypożycz</a>
                          </div>
                          
                        {else if $status == "waiting"}
                          <h5> oczekuje na zatwierdzenie </h5>
                        {else}
                          <h5> wypożyczony do {$rental_end_date}</h5>
                        {/if}
                      {/if}

                      {if isset($login) && \core\RoleUtils::inRole("handlowiec")}
                        {if $status == "available"}
                          <h5> dostępny </h5>
                        {else if $status == "waiting"}
                          <h5> oczekuje na zatwierdzenie </h5>
                          <div class="text-dark text-uppercase mt-5">
                              <a href="{url action='wait' id=$rental_id car=$car.id}" type="button" class="btn btn-primary px-4">Zatwierdź</a>
                          </div>
                        {else}
                          <h5> wypożyczony do {$rental_end_date}</h5>
                        {/if}
                      {/if}
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="text-center ">
                    {foreach $msgs->getMessages() as $msg}
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                    {/foreach}
                </div>
            </div>
        </div>

    </div>

  </section>
{/block}
