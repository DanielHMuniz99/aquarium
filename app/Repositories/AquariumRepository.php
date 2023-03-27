<?php

namespace App\Repositories;

class AquariumRepository 
{
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