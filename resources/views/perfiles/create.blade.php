@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO PERFIL</h2>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'perfiles.store']) !!}
            @csrf
            <div class="form-group">
                {!! Form::label('nom_perfil', 'Nombre de perfil') !!}
                {!! Form::text('nom_perfil', null, ['class'=>'form-control', 'placeholder'=>'Nombre del perfil']) !!}
                @error('nom_perfil')
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
                    <input type="hidden" name="p_act" value="0" />
                    <input type="checkbox" id="p_act" name="p_act" value="1" />
                </div>
                @error('u_act')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
                {!! Form::submit('Guardar nuevo perfil', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    
    
@endsection
