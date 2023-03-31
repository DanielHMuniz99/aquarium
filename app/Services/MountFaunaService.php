<?php

namespace App\Services;

use App\Models\Fish;
use App\Repositories\FishRepository;
use App\Classes\FaunaItem;

use Illuminate\Support\Facades\DB;

class MountFaunaService
{
    protected int $liters;

    protected string $water;

    protected $fauna;

    protected $fishRepository;

    /**
     * @param int
     * @param string
     */
    public function __construct(int $liters, string $water)
    {
        $this->liters = $liters;
        $this->water = $water;
        $this->fauna = new FaunaItem($liters);
        $this->fishRepository = new FishRepository();
    }

    /**
     * @return Fish
     */
    public function execute()
    {
        $agressiveFish = new FaunaItem($this->liters);
        $passiveFish = new FaunaItem($this->liters);

        foreach (config("global.sizes") as $key => $population) {

            $aggressive = $this->fishRepository->getAggressiveFish($this->liters, $population, $this->water);

            if ($aggressive) {
                $agressiveFish->setFish($aggressive);
            }

            $passives = $this->fishRepository->getPassiveFish($this->liters, $population, $this->water);

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

    /**
     * @return void
     */
    public function mountFauna($fish) :void
    {
        for ($i = 0; $i < count($fish); $i++) {
            if ($this->fauna->getAvailable() > ($fish[$i]->shoal_min * $fish[$i]->size_avg)) {
                $this->calculateAvailable($fish[$i]);
            }
        }
    }

    /**
     * @param Fauna
     * @return void
     */
    public function calculateAvailable($fish) :void
    {
        $this->fauna->increaseTotal($fish->shoal_min);
        $this->fauna->decreaseAvailable($fish->shoal_min * $fish->size_avg);
        $this->fauna->setFish($fish);
    }
}