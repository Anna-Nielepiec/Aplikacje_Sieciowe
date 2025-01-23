<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\class\User;


class LogowanieCtrl {
    
    private $form;
    
    public function __construct() {
    //stworzenie potrzebnych obiektów
    $this->form = new LoginForm();
    }
    
        public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //jak nie ma parametrów zwracamy false
        if (!isset($this->form->login))
            return false;

        // sprawdzenie wartości
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Podaj login');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Podaj hasło');
        }

        //jak nie ma wartości zwracamy false
        if (App::getMessages()->isError())
            return false;

        // sprawdzamy poprawność logowania
        $users = App::getDB()->select("users", "*",[ "AND" => [
		"login" => $this->form->login,
		"haslo" => $this->form->pass
	] 
            ]);
        if(isset($users)) $id = $users[0]["id"]; else $id=0;
        //if ($this->form->login == "admin" && $this->form->pass == "admin") {
        if($id > 0){

            $userRoles = App::getDB()->select("user_roles", ["[>]roles" => ["role_id" => "id"]], ["nazwa"],["user_id" => $id,]);

            $roles = array_column($userRoles, "nazwa");

            $userObj = new User(
                $users[0]["id"],
                $users[0]["email"],
                $roles,
                $this->form->login
            );

            SessionUtils::store("login", $userObj->login);
            SessionUtils::store("user_id", $id);

            foreach ($roles as $role) {
                RoleUtils::addRole($role);
            }

        //    $record = App::getDB()->select("user_roles", ["[>]roles" => ["role_id" => "id"]], ["nazwa"],["user_id" => $id,]);
        //    $rolaNazwa = $record[0]["nazwa"];
        //     RoleUtils::addRole($rolaNazwa);
        //} else if ($this->form->login == "user" && $this->form->pass == "user") {
        //    RoleUtils::addRole('user');
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }


    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('Logowanie.tpl');
    }
    
    public function action_logowanie() {
                      
        if ($this->validate()) {
            //osoba zalogowana przekierowuje na główną akcję
            Utils::addErrorMessage('Logowanie powiodło się');
            SessionUtils::store('login', $this->form->login);
            if (RoleUtils::inRole("adm"))
                App::getRouter()->redirectTo("users");
            else
                App::getRouter()->redirectTo("home");
        } else {
            //osoba niezalogowana zostaje na stronie logowania
            $this->generateView();
     }

                    //1. pobranie parametrów formularza logowania (login i hasło)
        //...

        //2. walidacja (pobranie z BD informacji o użytkowniku)
        //... //załóżmy, że rola użytkownika zostanie tu zapisana w zmiennej $rola

        //3.1 jeśli walidacja poprawna to "zaloguj"
        //\core\RoleUtils::addRole($rola); //zapisanie roli w sesji

        // i przekieruj do wybranej akcji (tej domyślnej po zalogowaniu)
        //App::getRouter()->redirectTo("showdata");

        //3.2 jeśli walidacja niepoprawna to pozostań na stronie logowania i wyświetl komunikaty
    //...
        
    }
    
    public function action_logout(){

    session_destroy();
    //przekieruj do akcji po wylogowaniu)
    Utils::addInfoMessage("Wylogowano pomyślnie.");
    App::getRouter()->redirectTo("home");

}
    
}
