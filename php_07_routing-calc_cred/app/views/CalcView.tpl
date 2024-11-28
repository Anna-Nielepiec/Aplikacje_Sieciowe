{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<header class="major">
 <h2>Kalkulator kredytowy</h2>
 </header>

<div class="row gtr-uniform gtr-50">
<div class="col-6">
	<form class="pure-form pure-form-stacked" action="{$conf->app_url}/app/calc.php" method="post">
		<fieldset>
		
		 <div class="row gtr-uniform gtr-50">
			<div class="col-12">
				<label for="id_kwota_kredytu">kwota kredytu: </label>
				<input id="kwota_kredytu" type="text" name="kwota_kredytu" value="{$form->kwota_kredytu}">
			</div>
			
			<div class="col-12">
                <label for="id_okres">Na ile lat: </label>
                <input id="okres" type="text" name="okres" value="{$form->okres}">
            </div>
			
			<div class="col-12">
                <label for="id_oprocentowanie">Oprocentowanie: </label>
                <input id="oprocentowanie" type="text" name="oprocentowanie" value="{$form->oprocentowanie}">
            </div>	
			
<!--{if isset($res->op_name)}
<option value="{$form->oprocentowanie}">ponownie: {$res->op_name}</option>
<option value="" disabled="true">---</option>
{/if}-->
			<div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Oblicz rate"/></li>
                </ul>
            </div>
			
		</fieldset>
	</form>
</div>

<div class="col-6">

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}