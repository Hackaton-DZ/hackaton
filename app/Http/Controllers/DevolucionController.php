<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\Producto;
use App\Venta;
use App\PedidoDevolucion;
use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    
    public function  index(){
        
        
        $devoluciones= json_decode(file_get_contents("https://inretail-hackathon-api.azurewebsites.net/api/promart/Ventas"));

        //return $devoluciones;
        return view('devoluciones.index', compact('devoluciones'));

    }

    public function  create(){
        $ventas= json_decode(file_get_contents("https://inretail-hackathon-api.azurewebsites.net/api/promart/Ventas"));
        //$Plan= new Venta();
        foreach($ventas as $venta){
            $Plan= new Venta();
            $Plan->fill( (array)$venta );
            $Plan->save();
        }
        
        foreach($ventas as $venta){
            $Plan= new Cliente();
            $Plan->fill((array)$venta );
            $Plan->save();
        }
       // $clientes=$ventas->pluck('nombreCLiente','documento')->prepend('Seleccione una Opcion', '');
        $clientes = Cliente::get()->pluck('nombre', 'id')->prepend('Seleccione una Opcion', '');
        $venta = Venta::all();
        
        //return view('devoluciones.create', compact('clientes','name'));
        return $venta;
    }
    

    public function  store(Request $request){

        $scort = PedidoDevolucion::create($request->all());
        $scort->save();



        return redirect()->route('devoluciones.index');
    }
}
