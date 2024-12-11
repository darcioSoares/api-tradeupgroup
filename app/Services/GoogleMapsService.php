<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GoogleMapsService
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.google_maps.key');
    }

    public function getAddressData(string $cep)
    {

        dd($this->apiKey); 
        
        $url = "https://maps.googleapis.com/maps/api/geocode/json";
        $response = Http::get($url, [
            'address' => $cep,
            'key' => $this->apiKey,
        ]);

        if ($response->failed()) {
            throw new \Exception('Failed to connect to Google Maps API');
        }

        return $response->json();
    }

    public function calculateDistance(array $location1, array $location2): float
    {
        $earthRadius = 6371; // Raio da Terra em km

        $latFrom = deg2rad($location1['lat']);
        $lonFrom = deg2rad($location1['lng']);
        $latTo = deg2rad($location2['lat']);
        $lonTo = deg2rad($location2['lng']);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    public function calculateCostAndDistance(string $cep1, string $cep2): array
    {
      
        $data1 = $this->getAddressData($cep1);
        $data2 = $this->getAddressData($cep2);

        if ($data1['status'] !== 'OK' || $data2['status'] !== 'OK') {
            throw new \Exception('Failed to retrieve location data for one or both CEPs');
        }

        //coordenadas dos endereços
        $location1 = $data1['results'][0]['geometry']['location'];
        $location2 = $data2['results'][0]['geometry']['location'];
    
        $distance = $this->calculateDistance($location1, $location2);

        // Calcular o custo (1 real por km)
        $cost = $distance * 1.0;

        return [
            'distance' => $distance,
            'cost' => $cost,
        ];
    }
}
