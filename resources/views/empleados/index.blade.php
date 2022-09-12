@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h2>EMPLEADOS</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('empleados.create')}}" class="btn bg-primary float-right">Nuevo</a>
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
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{$empleado->nombre}}</td>
                    <td>{{$empleado->puesto}}</td>
                    <td>{{$empleado->e_act}}</td>
                    <td><a href="{{route('empleados.edit', [ $empleado->id_empleados])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('empleados.destroy', [ $empleado->id_empleados])}}" method="POST">
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