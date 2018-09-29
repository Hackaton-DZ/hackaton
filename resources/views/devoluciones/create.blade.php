@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
    {!! Form::open(['method' => 'POST', 'route' => ['devoluciones.store']]) !!}
        <div class="card-header">
            Registrar Devolucion
        </div>
        <div class="card-body">
            {!! Form::label('cliente_id', 'Cliente ID*', ['class' => 'control-label']) !!}
                   {!! Form::select('cliente_id', $clientes, old('cliente_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cliente_id'))
                        <p class="help-block">
                            {{ $errors->first('cliente_id') }}
                        </p>
                    @endif
            {!! Form::label('producto_id', 'Id Producto*', ['class' => 'control-label']) !!}
                    {!! Form::text('producto_id', old('producto_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('producto_id'))
                        <p class="help-block">
                            {{ $errors->first('producto_id') }}
                        </p>
                    @endif

            {!! Form::label('venta_id', 'Venta ID*', ['class' => 'control-label']) !!}
                    {!! Form::text('venta_id', old('venta_id'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('venta_id'))
                        <p class="help-block">
                            {{ $errors->first('venta_id') }}
                        </p>
                    @endif
        </div>
        <div class="card-footer text-muted">
          {!! Form::submit('Registrar', ['class' => 'btn btn-danger']) !!}  
        </div>
        
    {!! Form::close() !!}
    </div>
</div>
@endsection