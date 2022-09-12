@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h2>SERVICIOS</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('servicios.create')}}" class="btn bg-primary float-right" style="margin-left: 10px">Nuevo</a>
    <a href="{{route('categorias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Categorias</a>
    <a href="{{route('familias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Familias</a>
    <a href="{{route('grupos.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Grupos</a>
    
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Nombre completo</th>
                <th>Puesto</th>
                <th>Activo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection



<!-- Termina contenido de pagina -->

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop