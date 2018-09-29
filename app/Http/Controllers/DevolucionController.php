<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\Producto;
use App\Venta;
use App\PedidoDevolucion;
use App\Ticket;
use App\Devolucion;
use Illuminate\Http\Request;

class DevolucionController extends Controller
{
    
    public function  index(){
        
        
        $devoluciones= json_decode(file_get_contents("https://inretail-hackathon-api.azurewebsites.net/api/promart/Ventas"));

        //return $devoluciones;
        return view('devoluciones.index', compact('devoluciones'));

    }

    public function  create(){
        /*$ventas= json_decode(file_get_contents("https://inretail-hackathon-api.azurewebsites.net/api/promart/Ventas"));
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
        }*/
       // $clientes=$ventas->pluck('nombreCLiente','documento')->prepend('Seleccione una Opcion', '');
        
       $clientes = Venta::where('')->pluck('nombreCliente', 'apellidos','documento');
        //$venta = Venta::all();
        
        //return view('devoluciones.create', compact('clientes','name'));
        return $clientes;
    }
    

    public function  store(Request $request){

        //4$peddev = PedidoDevolucion::create($request->all());
        //$peddev->save();

        $ticket= Ticket::create($request->all());
        $ticket->save();
        //$devolucion= Devolucion::create($request->all());
        //$devolucion->save();

        return redirect()->route('devoluciones.index');
    }
}
