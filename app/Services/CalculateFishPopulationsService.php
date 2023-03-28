<?php

namespace App\Services;

use App\Repositories\FishPopulationRepository;

class CalculateFishPopulationsService
{
    protected $fishPopulation;

    public function __construct()
    {
        $this->fishPopulation = new FishPopulationRepository;
    }

    /**
     * @param int
     * 
     * @return FishPopulationRepository 
     */
    public function execute(int $liters) :FishPopulationRepository
    {
        $this->fishPopulation->setLiters($liters);
        return $this->fishPopulation;
    }
}