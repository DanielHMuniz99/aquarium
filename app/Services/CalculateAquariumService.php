<?php

namespace App\Services;

use App\Repositories\AquariumRepository;

class CalculateAquariumService
{
    private $aquarium;

    public function __construct()
    {
        $this->aquarium = new AquariumRepository;
    }

    /**
     * @param int 
     * @param int
     * @param int
     * 
     * @return AquariumRepository
     */
    public function execute(int $height, int $width, int $length) :AquariumRepository
    {
        $aquariumCapacity = (($width * $length) * $height) / 1000;
        $filtering = $aquariumCapacity * 5;
        $this->aquarium->setAquariumCapacity($aquariumCapacity);
        $this->aquarium->setFiltering($filtering);
        return $this->aquarium;
    }
}