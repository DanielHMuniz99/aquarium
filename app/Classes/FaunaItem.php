<?php

namespace App\Classes;

class FaunaItem 
{
    public function __construct($available)
    {
        $this->available = $available;
    }

    protected $available;

    protected $total;

    protected $fish = [];

    public function increaseTotal($total) :void
    {
        $this->total += $total;
    }

    public function decreaseAvailable($available) :void
    {
        $this->available -= $available;
    }

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