@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVA FAMILIA</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('familias.store')}}" method="POST" >
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
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="o">--Elija la categoria a relacionar--</option>   
                             @foreach ($categorias as $categoria )
                                <option value="{{$categoria['categoria']}}">{{$categoria['categoria']}}</option>
                         @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label('familia', 'Familia') !!}
                        {!! Form::text('familia', null, ['class' => 'form-control', 'placeholder' => 'Escriba la familia']) !!}
                        @error('familia')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('clave', 'Clave') !!}
                        {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Escriba la clave']) !!}
                        @error('clave')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('f_act', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="f_act" value="0" />
                                <input type="checkbox" id="f_act" name="f_act" value="1" />                   
                        </div>
                        @error('f_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('prorreater	', 'Prorreater') !!}
                        <div >
                                <input type="hidden" name="prorreater" value="0" />
                                <input type="checkbox" id="prorreater" name="prorreater" value="1" />                   
                        </div>
                        @error('prorreater')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
            {!! Form::submit('Guardar nueva categoria', ['class' => 'btn btn-primary']) !!}
            <a href="{{route('familias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Cancelar</a>
        </form>
        </div>
    </div>

@endsection