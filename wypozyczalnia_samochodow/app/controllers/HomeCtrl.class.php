<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;


class HomeCtrl {
    
    public function action_home() {
        
        $variable = 123;
        $cars = App::getDB()->select("cars", "*");
//$cars=array(1,2,3);
         foreach ($cars as &$car) {
             $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car['id']]);
             $car['main_image'] = !empty($car_images) ? $car_images[0] : "images/rental-1.jpg";

           
         }

        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");

        $loggedUser = SessionUtils::load("logged_user", true);
        $login = SessionUtils::load("login", true);

        App::getSmarty()->assign("login", $loggedUser);
        
        App::getSmarty()->assign("value",$variable); 
        App::getSmarty()->assign("cars",$cars); 

        App::getSmarty()->display("home.tpl");
        
    }
    
}
