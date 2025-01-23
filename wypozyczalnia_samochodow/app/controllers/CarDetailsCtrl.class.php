<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use app\forms\CarDetailsForm;

class CarDetailsCtrl {

    private $form;

    public function __construct() {
        $this->form = new CarDetailsForm();
    }

    public function action_car_details() {
        $car_id = ParamUtils::getFromCleanURL(1);//pobranie id z url
        $login = SessionUtils::load("login", true);

        App::getSmarty()->assign("login", $login);
       

        $car = App::getDB()->get("cars", "*", ["id" => $car_id]);

        if ($car) {
            $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car_id]);
            $car['images'] = $car_images;
        
            //pobranie statusu na podstawie rezerwacji
            $status = "available";
            $date_now = date("Y-m-d H:i:s");
            $rentals = App::getDB()->select("rentals", ["id", "confirmed", "rental_end"], [
                "AND" => [
                    "car_id" => $car_id,
                    "rental_end[>]" => $date_now
                ]
            ]); //szukamy rezerwacji, których czas jeszcze nie minął

            //jeżeli jest jakaś aktualna rezerwacja to sprawdzamy czy trzeba ją zatwierdzić
            if (count($rentals)) {
                $last_rental = $rentals[0];

                if ($last_rental["confirmed"] == 1) { //jeżeli jest zatwierdzona to ustawiamy status rented i przekazujemy do widoku datę końca rezerwacji (w odpowiednim formacie)
                    $status = "rented";
                    App::getSmarty()->assign("rental_end_date",  date_format(date_create($last_rental["rental_end"]),"d.m.Y H:i:s"));
                }
                else { // jeżeli jest nie zatwierdzona to pokazujemy status waiting i przekazujemy do widoku id rezerwacji, żeby wiadomo było którą zatwierdzić przy wywołaniu funkcji wait()
                    $status = "waiting";
                    App::getSmarty()->assign("rental_id",  $last_rental["id"]);
                }
                    
            }

            App::getSmarty()->assign("car",  $car);
            App::getSmarty()->assign("status",  $status);
            App::getSmarty()->assign('page_title', 'dane samochodu');
            App::getSmarty()->display("car_details.tpl");
        } else {
            Utils::addErrorMessage('Brak dostępu do samochodu');
            App::getRouter()->redirectTo('home');
        }
    
    }
    public function action_rent() {
        $car_id = ParamUtils::getFromCleanURL(1);
        $user_id = SessionUtils::load("user_id", true);

        if ($car_id && $user_id) {
            App::getDB()->insert("rentals", [
                "user_id" => $user_id,
                "car_id" => $car_id
            ]);

            App::getRouter()->redirectTo('car_details/' . $car_id);
        } else {
            Utils::addErrorMessage('Nie udało się wypożyczyć');
            App::getRouter()->redirectTo('car_details/'. $car_id);
        }
    }


    public function action_wait() {
        $rental_id = ParamUtils::getFromCleanURL(1); //pobieramy pierwszy parametr z url - id rezerwacji
        $car_id = ParamUtils::getFromCleanURL(2); //pobieramy drugi parametr z url - id samochodu
        $user_id = SessionUtils::load("user_id", true);


        if ($rental_id && $user_id) { // jeżeli parametry są przekazane poprawnie to w bazie dla rezerwacji o id = rental_id ustawiamy confirmed na 1
            App::getDB()->update("rentals", [
                "confirmed" => 1
                    ], [
                "id" => $rental_id
            ]);
            App::getRouter()->redirectTo('car_details/' . $car_id);

        } else {
            Utils::addErrorMessage('Nie udało się zatwierdzić');
            App::getRouter()->redirectTo('car_details/'. $car_id);
        }
    }

    public function action_find_brand() {
        $this->form->page = ParamUtils::getFromPost("page");
        $this->form->brand = ParamUtils::getFromPost("brand");
        $offset = ($this->form->page - 1) * 5;

        $brand_count = App::getDB()->count("cars", "*", ["brand[~]" => $this->form->brand]);
        $max_page = ceil($brand_count / 5);
        $brands = App::getDB()->select("cars", "*", [
            "LIMIT" => [$offset, 5],
            "brand[~]" => $this->form->brand
        ]);

        foreach ($cars as &$car) {
            $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car['id']]);
            $car['images'] = !empty($car_images) ? $car_images[0] : "/assets/images/rental-1.jpg";

            $owner = App::getDB()->get("users", ["login"], ["id" => $car['registration_number']]);
            $car['owner_name'] = $owner ? $owner['login']  : "Unknown";
        }

        $loggedUser = SessionUtils::load("logged_user", true);

        App::getSmarty()->assign("cars", $brands);
        App::getSmarty()->assign("page", $this->form->page);
        App::getSmarty()->assign("max_page", $max_page);
        App::getSmarty()->assign("brand", $this->form->brand);
        App::getSmarty()->assign('page_title', 'Cars');
        App::getSmarty()->assign('logged_user', $loggedUser);
        App::getSmarty()->display("home.tpl");
    }
}
    
    

