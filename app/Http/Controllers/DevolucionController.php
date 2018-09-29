<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    public function  index(){
        return view('devolucion.index');
    }
}
