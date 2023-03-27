<?php

namespace App\Services;

use App\Repositories\AquariumRepository;

class CalculateAquariumService
{
    public function execute(int $height, int $width, int $length)
    {
        $aquarium = new AquariumRepository();
        $aquariumCapacity = (($width * $length) * $height) / 1000;
        $filtering = $aquariumCapacity * 5;
        $aquarium->setAquariumCapacity($aquariumCapacity);
        $aquarium->setFiltering($filtering);
        return $aquarium;
    }
}