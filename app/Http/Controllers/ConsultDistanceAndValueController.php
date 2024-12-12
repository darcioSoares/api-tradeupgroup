<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleMapsService;
use App\Services\ConsultDistanceAndValueService;
use App\Http\Requests\ConsultDistanceAndValueRequest;
use App\Http\Resources\ConsultDistanceAndValueResource;

class ConsultDistanceAndValueController extends Controller
{
    public function index(ConsultDistanceAndValueRequest $request){

        $consultDistanceAndValueService = new ConsultDistanceAndValueService();

        $cep_origin = $request->cep_origin;
        $cep_destination = $request->cep_destination;

        $result = $consultDistanceAndValueService->getDistanceAndValue($cep_origin,$cep_destination);
             
        return new ConsultDistanceAndValueResource((object) [
            'distance' => $result['distance_km'],
            'cost' => $result['cost'],
        ]);
          
    }

}
