<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Services\CalculateAquariumService;
use App\Services\CalculateFishPopulationsService;
use Illuminate\Http\Request;

class AquariumController extends BaseController
{
    public $calculateAquarium;

    public function __construct()
    {
        $this->calculateAquarium = new CalculateAquariumService;
        $this->calculateFishPopulations = new CalculateFishPopulationsService;
    }

    public function index()
    {
        return view("index");
    }

    public function calculate(Request $request)
    {
        $height = $request->input("height");
        $width = $request->input("width");
        $length = $request->input("length");

        $aquariumCapacity = $this->calculateAquarium->execute($height, $width, $length);

        return response()->json(["capacity" => $aquariumCapacity->getAquariumCapacity(), "filtering" => $aquariumCapacity->getFiltering()]);
    }

    public function fishPopulation(int $liters)
    {
        $population = $this->calculateFishPopulations->execute($liters);
        return view("population", ["population" => $population]);
    }

    public function loadFauna()
    {
        return view("fauna");
    }

    public function fauna()
    {
        return view("fauna");
    }
}