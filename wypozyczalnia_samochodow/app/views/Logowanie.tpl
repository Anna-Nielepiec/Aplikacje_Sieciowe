{extends file="main.tpl"}

{block name=content}

<section id="search position-absolute top-50 start-50 translate-middle">
      <div class="container search-block p-5">

<form method="post" action="{$conf->action_root}logowanie" class "row">
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="login" class="label-style text-capitalize form-label text-dark">login</label>
            
            <div class="input-group location text-dark">
              <input type="text" name="login" class="form-control p-3 position-relative" placeholder="Wpisz login" id="login">             
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mt-4 mt-lg-0">
            <label for="pass" class="label-style text-capitalize form-label text-dark">Hasło</label>            
            <div class="input-group date">
              <input type="password" name="pass" class="form-control p-3"placeholder="Wpisz hasło" id="pass">
            </div>
          </div>
   <div class="d-flex gap-3 mt-4">
  
          <button class="btn btn-primary" type="submit">Zaloguj się</button>
          <button class="btn btn-dark" type="button">Przypomnij hasło</button>         
  </div>
  </form>

   {foreach $msgs->getMessages() as $msg}
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;">{$msg->text}</p>
                {/foreach}      
 
  </div>
  </section>

{/block}