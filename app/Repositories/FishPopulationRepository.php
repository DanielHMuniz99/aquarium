<?php

namespace App\Repositories;

class FishPopulationRepository 
{
    public function __construct($liters, $size)
    {
        $this->liters = $liters;
        $this->size = $size;
    }

    protected $liters = 0;

    protected $size = "";

    public function getLiters()
    {
        return $this->liters;
    }

    public function setLiters($liters)
    {
        $this->liters = $liters;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getCapacity()
    {
        return round($this->liters / config("global.per_liter.{$this->size}"));
    }
}