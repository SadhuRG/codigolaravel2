<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
//ruta del controlador servicios usado
Route::get('servicios', 'App\Http\Controller\ServiciosController@index')->name('servicios');
Route::view('contacto', 'contacto')->name('contacto');

