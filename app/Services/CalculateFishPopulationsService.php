<?php

namespace App\Services;

use App\Repositories\FishPopulationRepository;

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
            $sizes[$size] = new FishPopulationRepository($this->liters, $size);
        }
        return $sizes;
    }
}