@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h2>USUARIOS</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('usuarios.create')}}" class="btn bg-primary float-right">Nuevo</a>
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th style="width: 140px">Foto</th>
                <th>Nombre</th>
                <th style="width: 260px">Email</th>
                <th>perfil</th>
                <th>Provedor</th>
                <th>Activo</th>
                <th>Autorizado</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td >
                        <img src="{{asset($usuario->foto)}}" width="85" height="85" class="rounded-circle">
                    </td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->perfil}}</td>
                    <td>{{$usuario->proveedor}}</td>
                    <td>{{$usuario->u_act}}</td>
                    <td>{{$usuario->u_aut}}</td>
                    <td><a href="{{route('usuarios.edit', [ $usuario->id_usuarios])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('usuarios.destroy', [ $usuario->id_usuarios])}}" method="POST">
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