<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Actions\CalculateAquariumAction;
use App\Actions\CalculateFishPopulationsAction;
use App\Services\MountFaunaService;
use Illuminate\Http\Request;

class AquariumController extends BaseController
{
    /**
     * @param Request
     */
    public function calculate(Request $request)
    {
        $data = $request->all();
        $calculateAquarium = new CalculateAquariumAction();
        $aquariumCapacity = $calculateAquarium->handle($data["height"], $data["width"], $data["length"]);
        return response()->json(["capacity" => $aquariumCapacity->getAquariumCapacity(), "filtering" => $aquariumCapacity->getFiltering()]);
    }

    /**
     * @param int
     */
    public function fishPopulation(int $liters)
    {
        $calculateFishPopulations = new CalculateFishPopulationsAction();
        $population = $calculateFishPopulations->handle($liters);
        return view("population", ["population" => $population]);
    }

    /**
     * @param Request
     */
    public function fauna(Request $request)
    {
        $data = $request->all();
        $mountFauna = new MountFaunaService($data['liters'], $data['water']);
        $fauna = $mountFauna->execute();
        return view("fauna-content", ["fauna" => $fauna]);
    }
}