<?php

namespace App\Actions;

use App\Classes\AquariumItem;

class CalculateAquariumAction
{
    /**
     * @param int 
     * @param int
     * @param int
     * 
     * @return AquariumItem
     */
    public function handle(int $width, int $length, int $height) :AquariumItem
    {
        $aquariumCapacity = (($width * $length) * $height) / 1000;
        $filtering = $aquariumCapacity * 5;
        $aquarium = new AquariumItem($aquariumCapacity, $filtering);
        return $aquarium;
    }
}