<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosCrontroller extends controller
{
public function index()
{
    $servicios=[
        ['titulo'=> 'servicio 01'],
        ['titulo'=> 'servicio 02'],
        ['titulo'=> 'servicio 03'],
    ];
    return view('servicios',compact('servicios'));//
}
}
