<?php

namespace app\controllers;

use core\App;
use core\SessionUtils;


class UsersCtrl {
    
    public function action_users() {

        $loggedUser = SessionUtils::load("login", true);

        App::getSmarty()->assign("login", $loggedUser);
        
        $users = App::getDB()->select("users", "*");
       
        //Utils::addInfoMessage("Treść wiadomości");
        
        App::getSmarty()->assign("users", $users); 
        App::getSmarty()->display("Users.tpl");
        
    }
    
}