<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Anna Nielepiec
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota_kredytu = getFromRequest('kwota_kredytu');
		$this->form->okres = getFromRequest('okres');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota_kredytu ) && isset ( $this->form->okres ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota_kredytu == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->okres == "") {
			getMessages()->addError('Nie podano liczby lat');
		}

		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->kwota_kredytu )) {
				getMessages()->addError('Kwota kredytu musi byc liczbą');
			}
			
			if (! is_numeric ( $this->form->okres )) {
				getMessages()->addError('Liczba lat musi byc liczbą');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Oprocentowanie musi byc liczbą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota_kredytu = floatval($this->form->kwota_kredytu);
			$this->form->okres = intval($this->form->okres);
			$this->form->oprocentowanie = floatval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
				
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
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description',nl2br("Kolejne rozszerzenia dla aplikacja z jednym \"punktem wejścia\". \nDo nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw."));
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
