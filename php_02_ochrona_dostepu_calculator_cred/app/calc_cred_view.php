<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT);?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
<legend>Kalkulator kredytowy</legend>
<fieldset>
	<label for="id_kwota_kredytu">kwota kredytu: </label>
	<input id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="<?php if (isset($kwota_kredytu)) print($kwota_kredytu); ?>" /><br />
	
	
	<label for="id_okres">Na ile lat: </label>
	<input id="id_okres" type="text" name="okres" value="<?php if (isset($okres)) print($okres); ?>" /><br />
	
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	</fieldset>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
	
		<input type="submit" value="Oblicz rate" class="pure-button pure-button-primary" />
</form>	
	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ($messages) > 0) {
	echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
	foreach ( $messages as $key => $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</div>

</body>
</html>