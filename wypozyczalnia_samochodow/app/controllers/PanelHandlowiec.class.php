<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\HandlowiecForm;


class PanelHandlowiecCtrl {
    
    private $form;
    private $records; //rekordy pobrane z bazy danych
    
    public function __construct() {
    //stworzenie potrzebnych obiektów
    $this->form = new HandlowiecForm();
    }
    
    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->brand = ParamUtils::getFromRequest('brand');

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }
    
    public function generateView() {
    App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
    App::getSmarty()->display('PanelHandlowiec.tpl');
     }
    
    public function action_panelHandlowiec() {

        // 1. Walidacja danych formularza (z pobraniem)
        // - W tej aplikacji walidacja nie jest potrzebna, ponieważ nie wystąpią błedy podczas podawania nazwiska.
        //   Jednak pozostawiono ją, ponieważ gdyby uzytkownik wprowadzał np. datę, lub wartość numeryczną, to trzeba
        //   odpowiednio zareagować wyświetlając odpowiednią informację (poprzez obiekt wiadomości Messages)
        $this->validate();

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->brand) && strlen($this->form->brand) > 0) {
            $search_params['brand[~]'] = $this->form->brand . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po tytule
        $where ["ORDER"] = "brand";
        //wykonanie zapytania

        try {
            $this->records = App::getDB()->select("cars", "*", $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('form', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('listaArt', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('PanelHandlowiec.tpl');
    }
    
    public function action_dodajSamochod() {
         
        App::getSmarty()->display("PanelHandlowiecDodajSamochod.tpl");
        
    }
    
    public function action_wyszukajSamochod() {
         
        App::getSmarty()->display("PanelHandlowiec.tpl");
        
    }
    
}
