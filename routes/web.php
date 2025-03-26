<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\BarrackController;
use App\Http\Controllers\CompanyController;



// Rutas para Corps
Route::get('/corps', [CorpController::class, 'index']); // Mostrar lista
Route::get('/corps/create', [CorpController::class, 'create']); // Formulario
Route::post('/corps/store', [CorpController::class, 'store']); // Guardar
Route::post('/corps/delete', [CorpController::class, 'destroy']); // Eliminar

Route::get('/barracks', [BarrackController::class, 'index']);
Route::get('/barracks/create', [BarrackController::class, 'create']);
Route::post('/barracks/store', [BarrackController::class, 'store']); 
Route::post('/barracks/delete', [BarrackController::class, 'destroy']);

Route::get('/companies', [CompanyController::class, 'index']); 
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies/store', [CompanyController::class, 'store']); 
Route::post('/companies/delete', [CompanyController::class, 'destroy']);
