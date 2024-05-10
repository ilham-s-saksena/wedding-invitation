<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Wahyu-and-Dea', function (Request $request) {
    $tamu = $request->input('to');

    if(is_null($tamu)){
        return view('welcome');
    } else {
        return view('wahyu-dea', ['tamu' => $tamu]);
    }
});
