<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosCrontroller extends controller
{

    /** 
     * Handle the incoming request.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
    */


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
