<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class PostalCodesController extends Controller
{

    public function search(string $postalCodes): JsonResponse
    {
        return response()->json();
    }
}
