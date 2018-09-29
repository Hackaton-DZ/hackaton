<?php

namespace App\Http\Controllers;
use App\Venta;
use Illuminate\Http\Request;

class RecursosController extends Controller
{
    public function getVentas($comprobante){
        $ventas= Venta::All()->where('trnTechKey',$comprobante)->first();
        return $ventas;
    }
}
