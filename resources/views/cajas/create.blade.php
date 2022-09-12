@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>AGREGAR NUEVO BANCO/CAJA</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('cajas.store')}}" method="POST" >
    @csrf
    <div class="card card-default">

        {{-- Datos generales --}}
        <div class="card-header">
            <h3 class="card-title">Datos Generales</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @csrf
                    <div class="form-group">
                        {!! Form::label('nombre_banco', 'Nombre de banco') !!}
                        {!! Form::text('nombre_banco', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre de banco']) !!}
                        @error('nombre_banco')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('numero_cuenta', 'Número de cuenta') !!}
                        {!! Form::text('numero_cuenta', null, ['class' => 'form-control', 'placeholder' => 'Digite el número de cuenta']) !!}
                        @error('numero_cuenta')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('sucursal', 'Nombre de la sucursal') !!}
                        {!! Form::text('sucursal', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre de la sucursal']) !!}
                        @error('sucursal')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('clabe', 'Clabe') !!}
                        {!! Form::text('clabe', null, ['class' => 'form-control', 'placeholder' => 'Digite la clabe']) !!}
                        @error('clabe')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('caj_act', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="caj_act" value="0" />
                                <input type="checkbox" id="caj_act" name="caj_act" value="1" />                   
                        </div>
                        @error('caj_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('caj_aut', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="caj_aut" value="0" />
                                <input type="checkbox" id="caj_aut" name="caj_aut" value="1" />                   
                        </div>
                        @error('caj_aut')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
                
        </div>
    </div>

    <div class="card card-default">
        {{-- Especificos --}}
        <div class="card-header">
            <h3 class="card-title">Especificos</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            
                
                    <div class="form-group">
                        {!! Form::label('id_usuario', 'Asignar banco a usuario') !!}
                        <select name="id_usuario" id="id_usuario" class="form-control">
                             <option value="o">--Asignar a un usuario--</option>   
                             @foreach ($usuarios as $usuario )
                                <option value="{{$usuario['id_usuarios']}}">{{$usuario['nombre']}}</option>
                            @endforeach 
                        </select>
                    
                
            </div>
            {!! Form::submit('Guardar nuevo empleado', ['class' => 'btn btn-primary']) !!}
        </form>
        </div>
    </div>


@endsection


