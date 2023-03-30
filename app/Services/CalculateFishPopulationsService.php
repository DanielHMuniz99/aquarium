<?php

namespace App\Services;

use App\Classes\FishPopulationItem;

class CalculateFishPopulationsService
{
    protected $liters;

    /**
     * @param int
     */
    public function __construct(int $liters)
    {
        $this->liters = $liters;
    }

    /**
     * @return array
     */
    public function execute() :array
    {
        $sizes = [];
        foreach (config("global.sizes") as $key => $size) {
            $sizes[$size] = new FishPopulationItem($this->liters, $size);
        }
        return $sizes;
    }
}