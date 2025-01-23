<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\RentForm;

class RentCtrl {

    private $form;

    public function __construct() {
        $this->form = new RentForm();
    }

    public function action_rent() {
        $this->form->car_id = ParamUtils::getFromCleanURL(1);
        $this->form->user_id = SessionUtils::load("logged_user", true)->id;

        if ($this->form->car_id && $this->form->user_id) {
            // App::getDB()->insert("rentals", [
            //     "user_id" => $this->form->user_id,
            //     "car_id" => $this->form->car_id
            // ]);
            // App::getDB()->update("cars", [
            //     "status" => 'rented'
            //         ], [
            //     "id" => $this->form->car_id
            // ]);

            App::getRouter()->redirectTo('car_details/5');
        } else {
            App::getMessages()->addMessage(new Message("Nie udalo sie wypozyczyc", Message::ERROR));
            App::getRouter()->redirectTo('car_details/6');
        }
    }

    public function action_wait() {
        $this->form->car_id = ParamUtils::getFromCleanURL(1);
        $this->form->user_id = SessionUtils::load("logged_user", true)->id;

        if ($this->form->car_id && $this->form->user_id) {
        

            App::getRouter()->redirectTo('car_details/5');
        } else {
            App::getMessages()->addMessage(new Message("Nie udalo sie wypozyczyc", Message::ERROR));
            App::getRouter()->redirectTo('car_details/6');
        }
    }

    
}
?>



