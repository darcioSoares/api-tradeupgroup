<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Services\GoogleMapsService;

class ConsultDistanceAndValueService
{
    public function getDistanceAndValue(string $cep_origin, string $cep_destination)
    {        
        $googleMapsService = new GoogleMapsService();

        return $googleMapsService->calculateCostAndDistance($cep_origin, $cep_destination);
    }
}
