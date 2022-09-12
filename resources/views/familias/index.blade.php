@extends('adminlte::page')

@section('title', 'Familias')

@section('content_header')
    <h2>Familias</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('familias.create')}}" class="btn bg-primary float-right" style="margin-left: 10px">Nuevo</a>
    <a href="{{route('categorias.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Categorias</a>
    <a href="{{route('grupos.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Grupos</a>
    <a href="{{route('servicios.index')}}" class="btn bg-primary float-right" style="margin-left: 10px">Regresar a productos</a>
    
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Familia</th>
                <th>Categoria</th>
                <th>Activo</th>
                <th>Prorratear</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familias as $familia)
                <tr>
                    <td>{{$familia->clave}}</td>
                    <td>{{$familia->familia}}</td>
                    <td>{{$familia->categoria}}</td>
                    <td>{{$familia->f_act}}</td>
                    <td>{{$familia->prorreater}}</td>
                    <td><a href="{{route('categorias.edit', [ $familia->id_familia])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('categorias.destroy', [ $familia->id_familia])}}" method="POST">
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