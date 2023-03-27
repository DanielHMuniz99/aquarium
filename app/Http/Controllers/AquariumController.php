<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

use App\Services\CalculateAquariumService;
use Illuminate\Http\Request;

class AquariumController extends BaseController
{
    public $calculateAquariumService;

    public function __construct()
    {
        $this->calculateAquariumService = new CalculateAquariumService;
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

        $aquariumCapacity = $this->calculateAquariumService->execute($height, $width, $length);

        return response()->json(["capacity" => $aquariumCapacity->getAquariumCapacity(), "filtering" => $aquariumCapacity->getFiltering()]);
    }

}
