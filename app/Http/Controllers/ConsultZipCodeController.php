<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConsultZipCodeRequest;
use App\Http\Resources\ConsultZipCodeResource;
use App\Services\ConsultZipCodeService;

class ConsultZipCodeController extends Controller
{
    protected $consultZipCodeService;

    public function __construct(ConsultZipCodeService $consultZipCodeService)
    {
        $this->consultZipCodeService = $consultZipCodeService;
    }

    public function index(ConsultZipCodeRequest $request)
    {
        $cep = $request->cep;
       
        $data = $this->consultZipCodeService->getZipCodeData($cep);
       
        if (isset($data['erro'])) {
            return response()->json(['error' => $data['erro']], 404);
        }
   
        return new ConsultZipCodeResource((object) $data);
       
    }
}
