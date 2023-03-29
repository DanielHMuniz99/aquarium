<?php

namespace App\Services;

use App\Models\Fish;
use App\Repositories\FishRepository;
use Illuminate\Support\Facades\DB;

class MountFaunaService
{
    protected int $liters;

    protected string $water;

    protected array $population;

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
    }

    /**
     * @return Fish
     */
    public function execute()
    {
        $control = [];
        foreach ($this->population as $population) {

            $aggressive = $this->getAggressiveFish($population->getSize());
            
            if ($aggressive) {
                $control["aggressive"][] = [
                    "id" => $aggressive->id,
                    "size" => $population->getSize(),
                    "size_avg" => $aggressive->size_avg,
                    "name" => $aggressive->name,
                    "shoal_min" => $aggressive->shoal_min,
                    "aggressive" => $aggressive->aggressive,
                    "min_cm" => $aggressive->shoal_min * $aggressive->size_avg
                ];
            }

            $passives = $this->getPassiveFish($population->getSize());

            foreach ($passives as $passive) {
                $control["passive"][] = [
                    "id" => $passive->id,
                    "size" => $population->getSize(),
                    "size_avg" => $passive->size_avg,
                    "name" => $passive->name,
                    "shoal_min" => $passive->shoal_min,
                    "aggressive" => $passive->aggressive,
                    "min_cm" => $passive->shoal_min * $passive->size_avg
                ];
            }
        }

        return $this->gta($control);
    }

    public function gta($control)
    {
        $available = $this->liters;
        $count = [];

        $rand = array_rand($control['aggressive']); 
        if ($control['aggressive'][$rand]) {
            $count[] = ["number" => $control['aggressive'][$rand]["shoal_min"], $control['aggressive'][$rand]];
            $available -= $control['aggressive'][$rand]["min_cm"];
        }

        shuffle($control['passive']);
        for ($i = 0; $i < count($control['passive']); $i++) {
            if ($available > $control['passive'][$i]["min_cm"]) {
                $count[] = ["number" => $control['passive'][$i]["shoal_min"], $control['passive'][$i]];
                $available -= $control['passive'][$i]["min_cm"];
            }
        }

        return $count;
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

        return new Fish();
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



// 'micro' => 3,
// 'small' => 10,
// 'medium' => 24,
// 'big' => 60



// 182.25 / 24 

// 4 * 24 = 96

// 8 

// 86.25 = 8 
// TypeError: str_contains(): Argument #1 ($haystack) must be of type string, Illuminate\Database\Query\Expression given in file /home/daniel/workspace/laravel/aquarium/aquarium/vendor/laravel/framework/src/Illuminate/Database/Grammar.php on line 148
