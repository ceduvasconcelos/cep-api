<?php

namespace App\Http\Controllers;

use App\Contracts\PostalCodeApi;
use Illuminate\Http\JsonResponse;

class PostalCodesController extends Controller
{
    protected PostalCodeApi $postalCodeApi;

    public function __construct(PostalCodeApi $postalCodeApi)
    {
        $this->postalCodeApi = $postalCodeApi;
    }

    public function search(string $postalCodes): JsonResponse
    {
        $postalCodesFormatted = explode(',', $postalCodes);
        $response = [];

        foreach ($postalCodesFormatted as $postalCode) {
            $response[] = $this->postalCodeApi->search($postalCode);
        }

        return response()->json($response);
    }
}
