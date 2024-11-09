<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['kwota_kredytu'] = isset($_REQUEST['kwota_kredytu']) ? $_REQUEST['kwota_kredytu'] : null;
	$form['okres'] = isset($_REQUEST['okres']) ? $_REQUEST['okres'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['kwota_kredytu']) && isset($form['okres']) && isset($form['oprocentowanie']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['kwota_kredytu'] == "") $msgs [] = 'Nie podano kwoty kredytu';
	if ( $form['okres'] == "") $msgs [] = 'Nie podano liczby lat';
	if ( $form['oprocentowanie'] == "") $msgs [] = 'Nie podano oprocentowania';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $form['kwota_kredytu'] )) $msgs [] = 'Kwota kredytu musi byc liczbą';
		if (! is_numeric( $form['okres'] )) $msgs [] = 'Liczba lat musi byc liczbą';
		if (! is_numeric( $form['oprocentowanie'] )) $msgs [] = 'Oprocentowanie musi byc liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na int
	$form['kwota_kredytu'] = floatval($form['kwota_kredytu']);
	$form['okres'] = intval($form['okres']);
	$form['oprocentowanie'] = floatval($form['oprocentowanie']);
	
	//wykonanie operacji
	//liczba rat w ciągu roku (12)
	$liczba_rat_w_ciagu_roku = 12;
	
	// Wzor na wyznaczenie miesięcznych odsetek - Odsetki miesieczne=(oprocentowanie/liczba_rat_w_ciagu_roku)* Kwota kredytu
        
       $oprocentowanie_roczne = $oprocentowanie / 100; //zamiana oprocentowania na liczbę dziesiętną
       $result = ($oprocentowanie_roczne/$liczba_rat_w_ciagu_roku)*$kwota_kredytu;
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_cred.html');