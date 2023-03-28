<?php

namespace App\Repositories;

class FishPopulationRepository 
{
    protected $liters = 0;

    public function getLiters()
    {
        return $this->liters;
    }

    public function setLiters($liters)
    {
        $this->liters = $liters;
    }

    public function getMicroFishCapacity()
    {
        return $this->liters / config('global.micro_fish_per_liter');
    }

    public function getSmallFishCapacity()
    {
        return $this->liters / config('global.small_fish_per_liter');
    }

    public function getMediumFishCapacity()
    {
        return $this->liters / config('global.medium_fish_per_liter');
    }

    public function getBigFishCapacity()
    {
        return $this->liters / config('global.big_fish_per_liter');
    }
}