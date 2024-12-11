<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleMapsService;

class ConsultDistanceAndValueController extends Controller
{
    public function index(){

        $googleMapsService = new GoogleMapsService();

        $googleMapsService->getAddressData('123456');

        return "ok";  
    }
}
