<?php

namespace App\Services;

use App\Models\Fish;
use App\Repositories\FishRepository;

use App\Repositories\FaunaRepository;

use Illuminate\Support\Facades\DB;

class MountFaunaService
{
    protected int $liters;

    protected string $water;

    protected array $population;

    protected $fauna;

    /**
     * @param int
     * @param string
     * @param array
     */
    public function __construct(int $liters, string $water, array $population)
    {
        $this->liters = $liters;
        $this->water = $water;
        $this->population = $population;
        $this->fauna = new FaunaRepository($liters);
    }

    /**
     * @return Fish
     */
    public function execute()
    {
        $agressiveFish = new FaunaRepository($this->liters);
        $passiveFish = new FaunaRepository($this->liters);
        foreach ($this->population as $population) {

            $aggressive = $this->getAggressiveFish($population->getSize());
            if ($aggressive) {
                $agressiveFish->setFish($aggressive);
            }

            $passives = $this->getPassiveFish($population->getSize());
            foreach ($passives as $passive) {
                $passiveFish->setFish($passive);
            }
        }

        if ($agressiveFish->getFish()) {
            $rand = array_rand($agressiveFish->getFish());
            $this->mountFauna([$agressiveFish->getFish()[$rand]]);
        }

        $this->mountFauna($passiveFish->getFish());

        return $this->fauna;
    }


    public function mountFauna($fish) :void
    {
        for ($i = 0; $i < count($fish); $i++) {
            // dd($this->fauna->getAvailable(), ($fish[$i]->shoal_min * $fish[$i]->size_avg), $fish[$i]);
            if ($this->fauna->getAvailable() > ($fish[$i]->shoal_min * $fish[$i]->size_avg)) {
                $this->setData($fish[$i]);
            }
        }
    }

    /**
     * @param Fauna
     */
    public function setData($fish) :void
    {
        $total = $this->fauna->getTotal() + $fish->shoal_min;
        $this->fauna->setTotal($total);

        $available = $this->fauna->getAvailable() - ($fish->shoal_min * $fish->size_avg);
        $this->fauna->setAvailable($available);

        $this->fauna->setFish($fish);
    }

    /**
     * @return Fish
     */
    public function getFishByWater()
    {
        if ($this->water == "acid-water") {
            return Fish::where("ph_min", "<", 7);
        }

        if ($this->water == "alkaline-water") {
            return Fish::where("ph_min", ">=", 7);
        }

        return Fish::where("id", 0);
    }

    public function getAggressiveFish($size)
    {
        return $this->getFishByWater()
            ->whereBetween("size_avg", config("global.fish_size.{$size}"))
            ->where("aggressive", 1)
            ->whereRaw("size_avg * shoal_min < {$this->liters}")
            ->inRandomOrder()
            ->first();
    }

    public function getPassiveFish($size)
    {
        return $this->getFishByWater()
            ->whereBetween("size_avg", config("global.fish_size.{$size}"))
            ->where("aggressive", 0)
            ->whereRaw("size_avg * shoal_min < {$this->liters}")
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }
}