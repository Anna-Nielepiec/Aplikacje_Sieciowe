<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('logowanie');
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

//Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('logowanie', 'LogowanieCtrl');
Utils::addRoute('logout', 'LogowanieCtrl');

Utils::addRoute('home', 'HomeCtrl');
Utils::addRoute('kontakt', 'kontaktCtrl');
Utils::addRoute('Cars', 'CarsCtrl');
Utils::addRoute('car_details', 'CarDetailsCtrl');
Utils::addRoute('rent', 'CarDetailsCtrl');
//Utils::addRoute('home', 'CarsCtrl');

Utils::addRoute('gosc', 'GoscCtrl');
Utils::addRoute('panelAdmin', 'PanelAdminCtrl',["adm"]);
Utils::addRoute('panelUser', 'PanelUserCtrl',["user"]);

Utils::addRoute('panelHandlowiec', 'PanelHandlowiecCtrl',["handlowiec"]);
Utils::addRoute('dodajSamochod', 'PanelHandlowiecCtrl',["handlowiec"]);
Utils::addRoute('usunSamochod', 'PanelHandlowiecCtrl',["handlowiec"]);
Utils::addRoute('wyszukajSamochod', 'PanelHandlowiecCtrl',["handlowiec"]);
//Utils::addRoute('panelUzytkownik', 'PanelUzytkownikCtrl');
//Utils::addRoute('panelZalogowanego', 'PanelZalogowanegoCtrl');
//Utils::addRoute('action_name', 'controller_class_name');