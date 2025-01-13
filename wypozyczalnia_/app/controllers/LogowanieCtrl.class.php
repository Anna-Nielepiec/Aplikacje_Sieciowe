<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;


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
        $record = App::getDB()->select("users", ["id"],[ "AND" => [
		"login" => $this->form->login,
		"haslo" => $this->form->pass
	] 
            ]);
        if(isset($record)) $id = $record[0]["id"]; else $id=0;
        //if ($this->form->login == "admin" && $this->form->pass == "admin") {
        if($id>=1){

           $record = App::getDB()->select("user_roles", ["[>]roles" => ["role_id" => "id"]], ["role_name"],["users_id" => $id,]);
           $rolaNazwa = $record[0]["nazwa"];
            RoleUtils::addRole($rolaNazwa);
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
            App::getRouter()->redirectTo("home");
        } else {
            //osoba niezalogowana zostaje na stronie logowania
            $this->generateView();
     }

        
    }
    
    public function action_logout(){

    session_destroy();
    //przekieruj do akcji po wylogowaniu)
    App::getRouter()->redirectTo("home");

}
    
}
