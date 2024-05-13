<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UcapanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dea-and-Sidik', [UcapanController::class, 'dea_sidik']);
Route::get('/Sidik-and-Dea', [UcapanController::class, 'sidik_dea']);

Route::post('/ucapan', [UcapanController::class, 'store']);
