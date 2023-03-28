<?php

namespace App\Services;

use App\Models\Fish;

class MountFaunaService
{
    protected $fauna;

    public function __construct()
    {
        $this->fauna = new Fish();
    }

    /**
     * @param float
     * @param string
     * 
     * @return Fish
     */
    public function execute(float $liters, string $water) :Fish
    {
        $fauna = $this->getFishByWater($water);
        return $fauna->get();
    }

    /**
     * @param Fish
     * 
     * @return Fish
     */
    public function getFishByWater($water)
    {
        if ($water == "acid-water") {
            $fauna = $this->fauna->where("ph_min", "<", 7);
        }

        if ($water == "alkaline-water") {
            $fauna = $this->fauna->where("ph_min", ">", 7);
        }

        return $fauna;
    }
}