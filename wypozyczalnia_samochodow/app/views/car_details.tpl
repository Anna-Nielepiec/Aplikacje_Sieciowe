{extends file="main.tpl"}
{block name=content}

  <section id="card">

    <div class="container ">

      <h2 class="text-uppercase text-center text-dark">

       {$page_title} {$car.brand}

      </h2>

      <div class="row">

      

        <div class="col-md-6 col-lg-4">

          <div class="post pt-5 pb-3">

            <div class="image-zoom">

              <a href="" class="blog-img"><img src="{$conf->app_url}/{$car.images[0]}" alt="" class="img-fluid" /></a>

            </div>
<h4>{$car.brand} {$car.model} </h4> 
           
                 {if $car.status == "available"}
                  <div class="text-center text-dark text-uppercase">

              <a href="{url action='rent' id=$car.id}">
                Rezerwuj
                </a>

                 </div>
<h4> dostepny </h4> 
{else}
<h4> niedostepny </h4> 
{/if}
            <div class="text-center ">

            {foreach $msgs->getMessages() as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                {/foreach}   
                

              

            </div>
 </div>

        </div> 

      </div>

    </div>

  </section>
  {/block}
