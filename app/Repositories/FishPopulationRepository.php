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
        return $this->liters / 3;
    }

    public function getSmallFishCapacity()
    {
        return $this->liters / 10;
    }

    public function getMediumFishCapacity()
    {
        return $this->liters / 24;
    }

    public function getBigFishCapacity()
    {
        return $this->liters / 60;
    }
}