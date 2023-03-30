<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Services\CalculateAquariumService;
use App\Services\CalculateFishPopulationsService;
use App\Services\MountFaunaService;
use Illuminate\Http\Request;

class AquariumController extends BaseController
{
    public function calculate(Request $request)
    {
        $data = $request->all();
        $calculateAquarium = new CalculateAquariumService($data["height"], $data["width"], $data["length"]);
        $aquariumCapacity = $calculateAquarium->execute();

        return response()->json(["capacity" => $aquariumCapacity->getAquariumCapacity(), "filtering" => $aquariumCapacity->getFiltering()]);
    }

    public function fishPopulation(int $liters)
    {
        $calculateFishPopulations = new CalculateFishPopulationsService($liters);
        $population = $calculateFishPopulations->execute();
        return view("population", ["population" => $population]);
    }

    public function fauna(Request $request)
    {
        $data = $request->all();
        $calculateFishPopulations = new CalculateFishPopulationsService($data['liters']);
        $population = $calculateFishPopulations->execute();
        $mountFauna = new MountFaunaService($data['liters'], $data['water'], $population);
        $fauna = $mountFauna->execute();
        return view("fauna-content", ["fauna" => $fauna]);
    }
}