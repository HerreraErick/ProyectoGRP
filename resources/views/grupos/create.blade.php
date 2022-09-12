@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO GRUPO</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('grupos.store')}}" method="POST" >
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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('categoria', 'Categoria') !!}
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="o">--Elija la categoria a relacionar--</option>   
                             @foreach ($categorias as $categoria )
                                <option value="{{$categoria['categoria']}}">{{$categoria['categoria']}}</option>
                         @endforeach 
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('familia', 'Familia') !!}
                        <select name="familia" id="familia" class="form-control">
                            <option value="o">--Elija la familia a relacionar--</option>   
                             @foreach ($familias as $familia )
                                <option value="{{$familia['familia']}}">{{$familia['familia']}}</option>
                         @endforeach 
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group" id="fecha_creacion">
                       
                <input type="hidden" name="fecha_creacion" id="fecha_creacion" value="<?php echo date("Y-m-d");?>"  >

                
            </div>
                 <div class="form-group">
                        {!! Form::label('grupo', 'Grupo') !!}
                        {!! Form::text('grupo', null, ['class' => 'form-control', 'placeholder' => 'Escriba el grupo']) !!}
                        @error('grupo')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                </div>
                    <div class="form-group">
                        {!! Form::label('g_act', 'Activo') !!}
                        <div >
                                <input type="hidden" name="g_act" value="0" />
                                <input type="checkbox" id="g_act" name="g_act" value="1" />                   
                        </div>
                        @error('g_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
            {!! Form::submit('Guardar nueva categoria', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('grupos.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Cancelar</a>
        </form>
        </div>
    </div>

@endsection