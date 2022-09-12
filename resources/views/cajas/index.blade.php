@extends('adminlte::page')

@section('title', 'Cajas/Bancos')

@section('content_header')
    <h2>Cajas/Bancos</h2>
@stop

@section('content')
@if (session('mensaje'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{session('mensaje')}}</strong>
</div>
@endif
<div class="card-header ">
    <a href="{{route('cajas.create')}}" class="btn bg-primary float-right" style="margin-left: 10px">Nuevo</a>    
</div>
<div class="card">
    <div class="card-body">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>Banco</th>
                <th>Cuenta</th>
                <th>Sucursal</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cajas as $caja)
                <tr>
                    <td>{{$caja->nombre_banco}}</td>
                    <td>{{$caja->numero_cuenta}}</td>
                    <td>{{$caja->sucursal}}</td>
                    <td><a href="{{route('cajas.edit', [ $caja->id_cajasBancos])}}" class="btn btn-primary" style="height: 36px; width: 38px"><i class="fas fa-pencil-alt"></i></a></td>
                    <td>
                        <form action="{{route('cajas.destroy', [ $caja->id_cajasBancos])}}" method="POST">
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