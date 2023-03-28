<?php

namespace App\Repositories;

class FishRepository 
{
    protected $size = "";

    protected $availableFish = [];

    protected $capacity = 0;

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setAvailableFish($availableFish = [])
    {
        $this->availableFish = $availableFish;
    }

    public function getAvailableFish()
    {
        return $this->availableFish;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
}