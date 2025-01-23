<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;


class HomeCtrl {
    
    public function action_home() {
        
        $cars = App::getDB()->select("cars", "*");

         foreach ($cars as &$car) {
             $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car['id']]);
             $car['main_image'] = !empty($car_images) ? $car_images[0] : "images/rental-1.jpg";

           
         }

        $loggedUser = SessionUtils::load("login", true);

        App::getSmarty()->assign("login", $loggedUser);
        App::getSmarty()->assign("cars",$cars); 

        App::getSmarty()->display("home.tpl");
        
    }
    
}
