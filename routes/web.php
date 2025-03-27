<?php
use App\Http\Controllers\CorpController;
use Illuminate\Support\Facades\Route;

Route::get('/corps', [CorpController::class, 'index'])->name('corps.index');
Route::get('/FormularioCorp', [CorpController::class, 'create'])->name('corps.create');
Route::post('/Formulario', [CorpController::class, 'store'])->name('corps.store');