<?php

use App\Models\Listing;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('listings/{listing}', [ListingController::class, 'show']);

