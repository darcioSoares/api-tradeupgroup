<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ConsultZipCodeService
{
    public function getZipCodeData(string $zipCode): array
    {

        $url = "https://viacep.com.br/ws/{$zipCode}/json/";

        $response = Http::get($url);

        if ($response->failed()) {
            return ['error' => 'Error fetching data from ViaCEP'];
        }

        $data = $response->json();

        if (isset($data['erro']) && $data['erro'] === true) {
            return ['error' => 'CEP not found.'];
        }

        return $data;
    }
}
