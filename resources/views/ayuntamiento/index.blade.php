@extends('adminlte::page')

@section('title', 'Ayuntamientos')

@section('content_header')
    <h2>AYUNTAMIENTOS</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('ayuntamientos.create')}}" class="btn bg-primary float-right">Nuevo</a>
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>DIRECCION</th>
                <th>E-MAIL</th>
                <th>CONTACTO</th>
                <th>FACEBOOK</th>
                <th>INSTAGRAM</th>
                <th>PAGINA WEB</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ayuntas as $ayunta)
                <tr>
                    <td>{{$ayunta->nombre}}</td>
                    <td>{{$ayunta->descripcion}}</td>
                    <td>{{$ayunta->direccion}}</td>
                    <td>{{$ayunta->correo_electronico}}</td>
                    <td>{{$ayunta->telefono_contacto}}</td>
                    <td>{{$ayunta->facebook}}</td>
                    <td>{{$ayunta->instagram}}</td>
                    <td>{{$ayunta->pagina_web}}</td>
                    <td><a href="{{route('ayuntamientos.edit', [$ayunta->id_ayuntamiento])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('ayuntamientos.destroy', [$ayunta->id_ayuntamiento])}}" method="POST">
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