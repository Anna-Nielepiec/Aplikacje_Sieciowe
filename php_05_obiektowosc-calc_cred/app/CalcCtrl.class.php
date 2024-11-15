<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Anna Nielepiec
 *
 */
class CalcCtrl {

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota_kredytu = isset($_REQUEST ['kwota_kredytu']) ? $_REQUEST ['kwota_kredytu'] : null;
		$this->form->okres = isset($_REQUEST ['okres']) ? $_REQUEST ['okres'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota_kredytu ) && isset ( $this->form->okres ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota_kredytu == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->okres == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $kwota_kredytu,okres są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota_kredytu )) {
				$this->msgs->addError('Kwota kredytu musi byc liczbą');
			}
			
			if (! is_numeric ( $this->form->okres )) {
				$this->msgs->addError('Liczba lat musi byc liczbą');
			}
			
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Oprocentowanie musi byc liczbą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota_kredytu = floatval($this->form->kwota_kredytu);
			$this->form->okres = intval($this->form->okres);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			//liczba rat w ciągu roku (12)

	$liczba_rat_w_ciagu_roku = 12;

	if ($liczba_rat_w_ciagu_roku == 0) {
        $this->msgs->addError('Liczba rat w ciągu roku nie może być zerem.');
        return;
    }

	// Wzor na wyznaczenie miesięcznych odsetek - Odsetki miesieczne=(oprocentowanie/liczba_rat_w_ciagu_roku)* Kwota kredytu

        

       $oprocentowanie_roczne = $this->form->oprocentowanie / 100; //zamiana oprocentowania na liczbę dziesiętną

       $result = ($oprocentowanie_roczne/$liczba_rat_w_ciagu_roku)*$this->form->kwota_kredytu;
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
