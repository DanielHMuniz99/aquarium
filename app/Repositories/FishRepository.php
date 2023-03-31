<?php

namespace App\Repositories;

use App\Models\Fish;
use App\Repositories\Interfaces\FishRepositoryInterface;

class FishRepository extends AbstractRepository implements FishRepositoryInterface
{
    protected $model = Fish::class;

    /**
     * @return Fish
     */
    public function getFishByWater($water)
    {
        if ($water == "acid-water") {
            return $this->model->where("ph_min", "<", 7);
        }

        if ($water == "alkaline-water") {
            return $this->model->where("ph_min", ">=", 7);
        }

        return $this->model->where("id", 0);
    }

    public function getAggressiveFish($liters, $size, $water)
    {
        return $this->getFishByWater($water)
            ->whereBetween("size_avg", config("global.fish_size.{$size}"))
            ->where("aggressive", 1)
            ->whereRaw("size_avg * shoal_min < {$liters}")
            ->inRandomOrder()
            ->first();
    }

    public function getPassiveFish($liters, $size, $water)
    {
        return $this->getFishByWater($water)
            ->whereBetween("size_avg", config("global.fish_size.{$size}"))
            ->where("aggressive", 0)
            ->whereRaw("size_avg * shoal_min < {$liters}")
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }
}