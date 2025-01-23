{extends file="main.tpl"}
{block name=content}


  <section id="card">

    <div class="container ">

        <h2 class="text-uppercase text-center text-dark py-5">

            Użytkownicy

        </h2>

        <div class="row">
        
            <div class="col">
                
                <ol class="list-group list-group-numbered">
                
                    {foreach $users as $user}
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                
                                <div class="fw-bold">{$user.login}</div>
                                {$user.email}

                            </div>
                        </li>
                    {/foreach}

                </ol>

            </div>
            
        </div>

    </div>

  </section>
{/block}