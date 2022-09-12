<?php


use Illuminate\Support\Facades\Route;


    
    
Route::get('/categoria/{id}/familias','App\Http\Controllers\Servicio\servicioController@getfamilias');
Route::get('/familia/{id}/grupos','App\Http\Controllers\Servicio\servicioController@getgrupos');