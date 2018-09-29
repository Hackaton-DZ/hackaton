@extends('layouts.app')
@section('content')
<div class="container">

<h3 class="page-title">Lista de Devoluciones</h3>
   
    <p>
        <a href="{{ route('devoluciones.create') }}" class="btn btn-success">Crear Pedido Devolucion</a>
        
    </p>
   

    

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista de Devoluciones
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                       

                        <th>Id</th>
                        <th>Id Trx</th>
                        <th>Fecha</th>
                        <th>Caja</th>
                        <th>Secuencia</th>
                        <th>Tienda</th>
                        <th>Ean</th>
                        <th>Sku</th>
                        <th>Cant</th>
                        <th>Precio</th>
                         <th>Sku</th>
                        <th>Cant</th>
                        <th>Precio</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>
                <tbody>
                        @foreach ($devoluciones as $devolucion)
                            <tr data-entry-id="{{ $devolucion->id }}">
                             
                                    <td></td>
                                

                                <td >{{ $devolucion->trnTechKey }}</td>
                                <td >{!! $devolucion->dcompra !!}</td>
                                <td >{{ $devolucion->nterminal }}</td>
                                <td >{{ $devolucion->nsecuencia }}</td>
                                <td >{{ $devolucion->orgLvlNumber }}</td>
                                <td >{{ $devolucion->prdUpc }}                               
                                </td>
                                <td >{{ $devolucion->prdLvlNumber }}</td>
                                <td >{{ $devolucion->prdFullName }}</td>
                                <td >{{ $devolucion->qcantidad }}</td>
                                <td >{{ $devolucion->mventa }}</td>
                                 
                                 <td >{{ $devolucion->documento }}</td>
                                 <td >{{ $devolucion->apellidos }}</td>
                                 <td >{{ $devolucion->nombreCliente }}</td>                               <td>
                                    
                                    <a href="{{ route('devoluciones.show',[$devolucion->id]) }}" class="btn btn-xs btn-primary">Ver</a>
                                  
                                    
                                    <a href="{{ route('devoluciones.edit',[$devolucion->id]) }}" class="btn btn-xs btn-info">Editar</a>
                                  
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['devoluciones.destroy', $devolucion->id])) !!}
                                    {!! Form::submit('Eliminar', array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    
                                </td>

                            </tr>
                        @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
@stop



