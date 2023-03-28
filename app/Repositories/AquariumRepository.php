<?php

namespace App\Repositories;

class AquariumRepository 
{
    public function __construct($aquariumCapacity, $filtering)
    {
        $this->aquariumCapacity = $aquariumCapacity;
        $this->$filtering = $filtering;
    }

    protected $aquariumCapacity;

    protected $filtering;

    public function getAquariumCapacity()
    {
        return $this->aquariumCapacity;
    }

    public function setAquariumCapacity($aquariumCapacity)
    {
        $this->aquariumCapacity = $aquariumCapacity;
    }

    public function getFiltering()
    {
        return $this->filtering;
    }

    public function setFiltering($filtering)
    {
        $this->filtering = $filtering;
    }

}