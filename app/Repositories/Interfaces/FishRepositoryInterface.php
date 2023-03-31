<?php

namespace App\Repositories\Interfaces;

interface FishRepositoryInterface
{
    public function getFishByWater(string $water);
    public function getAggressiveFish(int $liters, string $size, string $water);
    public function getPassiveFish(int $liters, string $size, string $water);
}
