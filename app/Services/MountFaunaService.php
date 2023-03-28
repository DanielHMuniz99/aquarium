<?php

namespace App\Services;

use App\Models\Fish;
use App\Repositories\FishRepository;

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
    public function execute(float $liters, string $water, $population) :Fish
    {
        $fauna = $this->getFishByWater($water);

        $fish = [];
        if ($population->getBigFishCapacity()) {
            $fish["big"] = Fish::whereBetween("size_avg", config("global.fish_size.big_fish_size"))->get();
        }

        if ($population->getMediumFishCapacity()) {
            $fish["medium"] = Fish::whereBetween("size_avg", config("global.fish_size.medium_fish_size"))->get();
        }

        if ($population->getSmallFishCapacity()) {
            $fish["small"] = Fish::whereBetween("size_avg", config("global.fish_size.small_fish_size"))->get();
        }

        if ($population->getMicroFishCapacity()) {
            $fish["micro"] = Fish::whereBetween("size_avg", config("global.fish_size.micro_fish_size"))->get();
        }

        dd($fish);




        dd($population->getSmallFishCapacity(), $population->getMicroFishCapacity(), $population->getBigFishCapacity());

        return $fauna->get();
    }

    public function setFish($size = "")
    {
        $fishRepository = new FishRepository();

        $fishRepository->setSize($size);

        return $fishRepository;
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