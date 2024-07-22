<?php

namespace App\Services;

use App\Contracts\PostalCodeApi;
use Illuminate\Support\Facades\Http;

class ViaCepService implements PostalCodeApi
{
    public function search(string $postalCode): array
    {
        try {
            $response = Http::get(env('VIA_CEP_URL') . $postalCode . '/json');
        } catch (\Exception $e) {
            abort(500, $e->getMessage());
        }

        return [
            "cep" => str_replace('-', '', $response->json('cep')),
            "label" => $response->json('logradouro') . ', ' . $response->json('localidade'),
            "logradouro" => $response->json('logradouro'),
            "complemento" => $response->json('complemento'),
            "bairro" => $response->json('bairro'),
            "localidade" => $response->json('localidade'),
            "uf" => $response->json('uf'),
            "ibge" => $response->json('ibge'),
            "gia" => $response->json('gia'),
            "ddd" => $response->json('ddd'),
            "siafi" => $response->json('siafi')
        ];
    }
}
