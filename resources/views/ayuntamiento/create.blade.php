@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>AGREGAR NUEVO AYUNTAMIENTO</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('ayuntamientos.store')}}" method="POST" >
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
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre del ayuntamiento']) !!}
                        @error('nombre')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion', 'Descripcion') !!}
                        {!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Descripcion del ayuntamiento']) !!}
                        @error('descripcion')
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
                {!! Form::label('direccion', 'Direccion') !!}
                {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Escriba la direccion del ayuntamiento']) !!}
                @error('direccion')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('correo_contacto', 'Correo de contacto') !!}
                {!! Form::text('correo_contacto', null, ['class' => 'form-control', 'placeholder' => 'Escriba el correo de contacto del ayuntamiento']) !!}
                @error('correo_contacto')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('telefono_contacto', 'Telefono de Contacto') !!}
                {!! Form::text('telefono_contacto', null, ['class' => 'form-control', 'placeholder' => 'Escriba el telefono de contacto del ayuntamiento']) !!}
                @error('telefono_contacto')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('facebook', 'Facebook') !!}
                {!! Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Escriba el link del facebook del ayuntamiento']) !!}
                @error('facebook')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('instagram', 'Instagram') !!}
                {!! Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Escriba el link del instagram del ayuntamiento']) !!}
                @error('instagram')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('pagina_web', 'Pagina Web') !!}
                {!! Form::text('pagina_web', null, ['class' => 'form-control', 'placeholder' => 'Escriba el link de la pagina web del ayuntamiento']) !!}
                @error('pagina_web')
                    <span class="text-danger">Falta dato</span>
                @enderror
            </div>


            {!! Form::submit('Guardar nuevo empleado', ['class' => 'btn btn-primary']) !!}
        </form>
        </div>
    </div>


@endsection