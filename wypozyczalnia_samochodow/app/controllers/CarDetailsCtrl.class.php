<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
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
        
            


            // $is_favorite = false;
            // if ($loggedUser) {
            //     $is_favorite = App::getDB()->has("favorites", [
            //         "idUser" => $loggedUser->idUser,
            //         "idProperty" => $property_id
            //     ]);
            // }

            //App::getSmarty()->assign("car_id", $car_id);
            App::getSmarty()->assign("car",  $car);
            //App::getSmarty()->assign("is_favorite", $is_favorite);
            //App::getSmarty()->assign("logged_user", $loggedUser);
            App::getSmarty()->assign('page_title', 'dane samochodu');
            App::getSmarty()->display("car_details.tpl");
        } else {
            App::getMessages()->addMessage(new Message("Brak wyszukania", Message::ERROR));
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
            App::getDB()->update("cars", [
                "status" => 'rented'
                    ], [
                "id" => $car_id
            ]);
            //App::getSmarty()->assign('user', $user_id);

            App::getRouter()->redirectTo('car_details/' . $car_id);
        } else {
           // App::getMessages()->addMessage(new Message("Nie udalo sie wypozyczyc", Message::ERROR));
            App::getRouter()->redirectTo('car_details/6');
        }
    }
}
