<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleMapsService;
use App\Http\Requests\ConsultDistanceAndValueRequest;

class ConsultDistanceAndValueController extends Controller
{
    public function index(ConsultDistanceAndValueRequest $consultDistanceAndValueRequest){

        $googleMapsService = new GoogleMapsService();

        $googleMapsService->getAddressData('123456');

        return "ok";  
    }


}
