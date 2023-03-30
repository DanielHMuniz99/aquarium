<?php

namespace App\Services;

use App\Classes\AquariumItem;

class CalculateAquariumService
{
    protected int $height;

    protected int $width;

    protected int $length;

    /**
     * @param int 
     * @param int
     * @param int
     * 
     */
    public function __construct(int $height, int $width, int $length)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
    /**
     * @return AquariumItem
     */
    public function execute() :AquariumItem
    {
        $aquariumCapacity = (($this->width * $this->length) * $this->height) / 1000;
        $filtering = $aquariumCapacity * 5;
        $aquarium = new AquariumItem($aquariumCapacity, $filtering);
        return $aquarium;
    }
}