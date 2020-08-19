<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HipotenusaController extends Controller
{
    public function hipotenusa() {
        return view('hipotenusa');
    }

    public function solucion(Request $request) {
        $primercateto = (float)$request->input('primercateto');
        $segundocateto = (float)$request->input('segundocateto');

        
        $catetos = $primercateto * $primercateto +  $segundocateto * $segundocateto;
        $hipotenusa = sqrt($catetos);

        return view('solucion', [
            'primercateto' => $primercateto,
            'segundocateto' => $segundocateto,
            'hipotenusa' => $hipotenusa,
        ]);
}
}