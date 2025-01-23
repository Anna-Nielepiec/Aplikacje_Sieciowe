<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class SearchAvailabilityCtrl
{
    
    public function action_searchAvailabilityShow()
    {
        App::getSmarty()->display('SearchAvailabilityView.tpl');
    }

    public function action_searchAvailability()
    {
        $searchBrand     = ParamUtils::getFromRequest('search_brand');
        $searchModel   = ParamUtils::getFromRequest('search_model');
        $searchBody   = ParamUtils::getFromRequest('search_body');
        $searchTimeSlot = ParamUtils::getFromRequest('search_timeslot');
        

        if (empty($searchBrand) || empty($searchModel) || empty($searchBody) || empty($searchTimeSlot)) {
            Utils::addErrorMessage("Uzupełnij wszystkie pola wyszukiwania (marka, ,model, nadwozie, przedział godzinowy).");
            App::getRouter()->forwardTo('searchAvailabilityShow');
        }

        list($startHour, $endHour) = explode('-', $searchTimeSlot);

        try {
            $tables = App::getDB()->select('cars', [
                'id',
                'brand',
                'model'
            // ], [
            //     'maxCapacity[>=]' => $searchPeople,
            //     'isActive'        => 1
             ]
        );

            $results = [];

            foreach ($cars as $car) {

                $countCollisions = App::getDB()->count('rentals', [
                    "[>]cars" => ["id" => "id"],
                ], [
                    'rentals.id'
                ], [
                    'cars.id' => $car['id'],
                    'rentals.created_at' => $searchBrand,
                  
                    'rentals.created_at[>=]' => sprintf("%02d:00:00", $startHour),
                    'rentals.rental_end[<]'  => sprintf("%02d:00:00", $endHour),
                ]);

                $status = ($countCollisions > 0) ? 'Zarezerwowany' : 'Wolny';

                $results[] = [
                    'id'   => $car['id'],
                    'brand' => $car['brand'],
                    'model'  => $car['model'],
                    'status'    => $status
                ];
            }

            App::getSmarty()->assign('searchBrand', $searchBrand);
            App::getSmarty()->assign('searchTimeSlot', $searchTimeSlot);
            App::getSmarty()->assign('searchModel', $searchModel);
            App::getSmarty()->assign('searchBody', $searchBody);
            App::getSmarty()->assign('results', $results);

            App::getSmarty()->display('SearchAvailabilityResults.tpl');

        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            App::getRouter()->forwardTo('searchAvailabilityShow');
        }
    }
}