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

    protected $fishes;

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

    public function getFishes()
    {
        return $this->fishes;
    }

    public function setFishes($fishes)
    {
        $this->fishes = $fishes;
    }

    public function getCapacity()
    {
        return round($this->liters / config("global.per_liter.{$this->size}"));
    }
}