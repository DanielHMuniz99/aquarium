<?php

namespace App\Actions;

use App\Classes\FishPopulationItem;

class CalculateFishPopulationsAction
{
    /**
     * @param int
     * 
     * @return array
     */
    public function handle(int $liters) :array
    {
        $sizes = [];
        foreach (config("global.sizes") as $key => $size) {
            $sizes[$size] = new FishPopulationItem($liters, $size);
        }
        return $sizes;
    }
}