<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});
