<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="get">
	<label for="id_kwota_kredytu">kwota kredytu: </label>
	<input id="id_kwota_kredytu" type="text" name="kwota_kredytu" value="<?php if (isset($kwota_kredytu)) print($kwota_kredytu); ?>" /><br />
	
	
	<label for="id_okres">Na ile lat: </label>
	<input id="id_okres" type="text" name="okres" value="<?php if (isset($okres)) print($okres); ?>" /><br />
	
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br />
	
		<input type="submit" value="Oblicz rate" />
</form>	
	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ( $messages as $msg ) {
		echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Miesieczna rata: '.number_format($result,2) . "zl"; ?>
</div>
<?php } ?>

</body>
</html>