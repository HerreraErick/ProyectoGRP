@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h2>Categorias</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('categorias.create')}}" class="btn bg-primary float-right" style="margin-left: 10px">Nuevo</a>
    <a href="{{route('familias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Familias</a>
    <a href="{{route('grupos.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Grupos</a>
    <a href="{{route('servicios.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Regresar a productos</a>
    
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Orden</th>
                <th>Categoria</th>
                <th>Fecha de creación</th>
                <th>Activo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->orden}}</td>
                    <td>{{$categoria->categoria}}</td>
                    <td>{{$categoria->fecha}}</td>
                    <td>{{$categoria->c_act}}</td>
                    <td><a href="{{route('categorias.edit', [ $categoria->id_categoria])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('categorias.destroy', [ $categoria->id_categoria])}}" method="POST">
                            @method('delete')
                            @csrf
                            <button style="border:0" type="submit" value="Eliminar" class="btn btn-primary" ><i class="far fa-trash-alt"></i> </button>
                        </form>
                    </td>
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