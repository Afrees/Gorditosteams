<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorpsController;
use App\Http\Controllers\BarracksController;
use App\Http\Controllers\CompaniesController;

Route::resourse('corps', CorpsController::class);
Route::resourse('barracks', BarracksController::class);
Route::resourse('companies', CompaniesController::class);
