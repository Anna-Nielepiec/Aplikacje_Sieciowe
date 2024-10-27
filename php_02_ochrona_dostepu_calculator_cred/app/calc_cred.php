<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota_kredytu,&$okres,&$oprocentowanie){
	$kwota_kredytu = isset($_REQUEST['kwota_kredytu']) ? $_REQUEST['kwota_kredytu'] : null;
	$okres = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota_kredytu,&$okres,&$oprocentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota_kredytu) && isset($okres) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($kwota_kredytu) && isset($okres) && isset($oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $kwota_kredytu == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $okres == "") {
	$messages [] = 'Nie podano liczby lat';
}
	
if ( $oprocentowanie == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
	
	// sprawdzenie, czy $kwota_kredytu, $okres, $oprocentowanie są liczbami 
	if (! is_numeric( $kwota_kredytu )) {
		$messages [] = 'Kwota kredytu musi byc liczbą ';
	}
	
	if (! is_numeric( $okres )) {
		$messages [] = 'Liczba lat musi byc liczbą';
	}
	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Oprocentowanie musi byc liczbą';
	}
}

if (count ( $messages ) != 0) {
	return false;
} else {
	return true;
	}
}

function process(&$kwota_kredytu,&$okres,&$oprocentowanie,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$kwota_kredytu = intval($kwota_kredytu);    // Kwota kredytu
	$okres = intval($okres);   // Liczba lat
	$oprocentowanie = floatval($oprocentowanie); //oprocentowanie
	$min_oprocentowanie = 5.0; // minimalne oprocentowanie
	
	//liczba rat w ciągu roku (12)
	$liczba_rat_w_ciagu_roku = 12;
	
	
	// Wzor na wyznaczenie miesięcznych odsetek - Odsetki miesieczne=(oprocentowanie/liczba_rat_w_ciagu_roku)* Kwota kredytu
        
       $oprocentowanie_roczne = $oprocentowanie / 100; //zamiana oprocentowania na liczbę dziesiętną
       $result = ($oprocentowanie_roczne/$liczba_rat_w_ciagu_roku)*$kwota_kredytu;
	   
       if (floatval($oprocentowanie) < $min_oprocentowanie && $role !== 'manager') {
		$messages[] = 'Tylko manager banku może wybrać oprocentowanie niższe niż '.$min_oprocentowanie.'%';
		$result=null;
		return;
	   }
}
//definicja zmiennych kontrolera
$kwota_kredytu = null;
$okres = null;
$oprocentowanie = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota_kredytu,$okres,$oprocentowanie);
if ( validate($kwota_kredytu,$okres,$oprocentowanie,$messages) ) { // gdy brak błędów
	process($kwota_kredytu,$okres,$oprocentowanie,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota_kredytu,$okres,$oprocentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_cred_view.php';
?>