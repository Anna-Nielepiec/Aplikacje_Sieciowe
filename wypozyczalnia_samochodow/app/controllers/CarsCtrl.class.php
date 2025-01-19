<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class CarsCtrl {
    
    public function action_cars() {
        
        $cars = App::getDB()->select("cars", "*");
//$cars=array(1,2,3);
        // foreach ($cars as $car) {
        //     $car_images = App::getDB()->select("car_images", "imagePath", ["car_id" => $car['id']]);
        //     $car['main_image'] = !empty($car_images) ? $car_images[0] : "/images/rental-1.jpg";

           
        // }

        
       
        //Utils::addInfoMessage("Or even easier message :-)");
        
        App::getSmarty()->assign("cars",$cars); 
        App::getSmarty()->display("Cars.tpl");
        
    }
    
}
