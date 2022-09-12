@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h2>Editar perfil {{$perfile->nombre}}</h2>
@stop

@section('content')
 

       <div class="card">
        <div class="card-body">
            {!! Form::model($perfile,['route' => ['perfiles.update', $perfile->id_perfil], 'method' => 'put']) !!}
            @csrf
            <div class="form-group">
                {!! Form::label('nom_perfil', 'Nombre de perfil') !!}
                {!! Form::text('nom_perfil', null, ['class'=>'form-control', 'placeholder'=>'Nombre del perfil']) !!}
                @error('nom_perfil')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('fecha_creacion', 'Fecha de creacion') !!}
                {!! Form::text('fecha_creacion', null, ['class'=>'form-control', 'placeholder'=>'Escriba la fecha de hoy']) !!}
                @error('fecha_creacion')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('permisos', 'Permisos') !!}
                {!! Form::text('permisos', null, ['class'=>'form-control', 'placeholder'=>'Permisos']) !!}
                @error('permisos')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('p_act', 'activo') !!}
                <div class="form-control">
                {!! Form::checkbox('p_act', '1', true,) !!}
                </div>
                @error('u_act')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
                {!! Form::submit('Actualizar perfil', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop