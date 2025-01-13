<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('logowanie');
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('logowanie', 'LogowanieCtrl');
Utils::addRoute('wylogowanie', 'LoginCtrl');

Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('kontakt', 'kontaktCtrl');
Utils::addRoute('Samochody', 'SamochodyCtrl');

Utils::addRoute('gosc', 'GoscCtrl');
Utils::addRoute('panelAdmin', 'PanelAdminCtrl');
Utils::addRoute('panelUzytkownik', 'PanelUzytkownikCtrl');
Utils::addRoute('panelZalogowanego', 'PanelZalogowanegoCtrl');
//Utils::addRoute('action_name', 'controller_class_name');