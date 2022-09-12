@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVA CATEGORIA</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('categorias.store')}}" method="POST" >
    @csrf
    <div class="card card-default">

        {{-- Datos generales --}}
        <div class="card-header">
            
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @csrf
                    <div class="form-group">
                        {!! Form::label('categoria', 'Categoria') !!}
                        {!! Form::text('categoria', null, ['class' => 'form-control', 'placeholder' => 'Escriba la categoria']) !!}
                        @error('categoria')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('orden', 'Orden') !!}
                        <input type="number" id="orden" name="orden"
                        min="1" max="100" class="form-control">
                        @error('orden')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group" id="fecha">
                       
                        <input type="hidden" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>"  >

                        
                    </div>
                    <div class="form-group">
                        {!! Form::label('c_act', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="c_act" value="0" />
                                <input type="checkbox" id="c_act" name="c_act" value="1" />                   
                        </div>
                        @error('c_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
            {!! Form::submit('Guardar nueva categoria', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('categorias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Cancelar</a>
        </form>
        </div>
    </div>

@endsection





    