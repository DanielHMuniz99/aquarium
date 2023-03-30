<?php

namespace App\Repositories;

class FaunaRepository 
{
    public function __construct($available)
    {
        $this->available = $available;
    }

    protected $available;

    protected $total;

    protected $fish = [];

    protected $aggressiveFish = [];

    public function setAvailable($available)
    {
        $this->available = $available;
    }

    public function getAvailable()
    {
        return $this->available;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setFish($fish)
    {
        $this->fish[] = $fish;
    }

    public function getFish()
    {
        return $this->fish;
    }
}