<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    
    /**
     * Retorna todas las ubicaciones almacenadas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtiene todas las ubicaciones almacenadas
        $locations = Location::all();

        return view('prueba', [
            'locations' => Location::all()
        ]);
    }
}
