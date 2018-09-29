@extends('layouts.app')
@section('content')
<div class="container">
    Lista de Tickets

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($tickets as $ticket)
            <tr>
                <td >{{$ticket->id}}</td>
                <td>{{$ticket->venta->nombreCliente}}</td>
                <td>{{$ticket->created_at}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection