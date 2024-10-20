<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$kwota_kredytu = $_REQUEST ['kwota_kredytu'];
$okres = $_REQUEST ['okres'];
$oprocentowanie = $_REQUEST ['oprocentowanie'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

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

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$kwota_kredytu = intval($kwota_kredytu);    // Kwota kredytu
	$okres = intval($okres);   // Liczba lat
	$oprocentowanie = floatval($oprocentowanie); //oprocentowanie
	
	//liczba rat w ciągu roku (12)
	$liczba_rat_w_ciagu_roku = 12;
	
	// Wzor na wyznaczenie miesięcznych odsetek - Odsetki miesieczne=(oprocentowanie/liczba_rat_w_ciagu_roku)* Kwota kredytu
        
       $oprocentowanie_roczne = $oprocentowanie / 100; //zamiana oprocentowania na liczbę dziesiętną
       $result = ($oprocentowanie_roczne/$liczba_rat_w_ciagu_roku)*$kwota_kredytu;
       
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota_kredytu,$okres,$oprocentowanie,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_cred_view.php';