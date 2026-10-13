<?php
//use App\Http\Controllers\MateriasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function (){ 
    return view('inicio'); 
    });

Route::resource('materias', 'App\Http\Controllers\MateriasController');