<?php

namespace App\Services;

use App\Repositories\FishPopulationRepository;

class CalculateFishPopulationsService
{
    public function execute(int $liters)
    {
        $fishPopulation = new FishPopulationRepository();
        $fishPopulation->setLiters($liters);
        return $fishPopulation;
    }
}