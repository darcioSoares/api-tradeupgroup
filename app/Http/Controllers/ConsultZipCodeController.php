<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ConsultZipCodeRequest;

class ConsultZipCodeController extends Controller
{

    public function index(ConsultZipCodeRequest $request)
    {

        dd($request->cep);

        return response()->json(['message' => 'CEP válido!'], 200);
       
    }
}
