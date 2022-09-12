@extends('adminlte::page')

@section('title', 'Perfiles')

@section('content_header')
    <h2>PERFILES</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('perfiles.create')}}" class="btn bg-primary float-right">Nuevo</a>
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Permisos</th>
                <th>Activo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perfiles as $perfile)
                <tr>
                    <td>{{$perfile->id_perfil}}</td>
                    <td>{{$perfile->nom_perfil}}</td>
                    <td>{{$perfile->permisos}}</td>
                    <td>{{$perfile->p_act}}</td>
                    <td><a href="{{route('perfiles.edit', [ $perfile->id_perfil])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('perfiles.destroy', [ $perfile->id_perfil])}}" method="POST">
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