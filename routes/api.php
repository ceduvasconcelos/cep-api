<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostalCodesController;

Route::get('/search/local/{postalCodes}', [PostalCodesController::class, 'search']);
