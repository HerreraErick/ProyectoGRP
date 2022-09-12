@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO PROVEEDOR</h2>
@stop

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

@section('content')

{!! Form::open(['route' => 'proveedores.store']) !!}
    <div class="card card-default">
 
        {{-- Datos generales --}}
        <div class="card-header">
            <h3 class="card-title">Datos Generales</h3>
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
                        {!! Form::label('tipo_proveedor', 'Tipo del proveedor') !!}
                        <select name="tipo_proveedor" id="tipo_proveedor" class="form-control">
                            <option value="">--Escoja uno--</option>
                            <option value="Isumos">Insumos</option>
                            <option value="Servicios">Servicios</option>
                            <option value="Activos">Activos</option>
                        </select>
                        @error('tipo_proveedor')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre corto') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre corto']) !!}
                        @error('nombre ')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('nombre_comercial', 'Nombre comercial') !!}
                        {!! Form::text('nombre_comercial', null, ['class' => 'form-control', 'placeholder' => 'Nombre comercial']) !!}
                        @error('nombre_comercial')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
                

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nombre_representante', 'Nombre del representante') !!}
                        {!! Form::text('nombre_representante', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre del representante']) !!}
                        @error('nombre_representante')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('telefono_representante', 'Telefono del representante') !!}
                        <input type="text" name="telefono_representante" id="telefono_representante" class="form-control" placeholder="Telefono del representante">
                               
                        @error('telefono_representante')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('correo_representante', 'Correo del representante') !!}
                        {!! Form::text('correo_representante', null, ['class' => 'form-control', 'placeholder' => 'Escriba el correo del representante']) !!}
                        @error('correo_representante')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="card card-default">
        {{-- Especificos --}}
        <div class="card-header">
            <h3 class="card-title">Especificos</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('telefono_contacto', 'Telefono de contacto') !!}
                        {!! Form::text('telefono_contacto', null, ['class' => 'form-control', 'placeholder' => 'Escriba su telefono de contacto']) !!}
                        @error('telefono_contacto')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('correo_contacto', 'Correo del contacto') !!}
                        {!! Form::text('correo_contacto', null, ['class' => 'form-control', 'placeholder' => 'Escriba el correo de contacto']) !!}
                        @error('correo_contacto')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('maps', 'Enlace MAPS') !!}
                        {!! Form::text('maps', null, ['class' => 'form-control', 'placeholder' => 'Escriba el enlace del maps']) !!}
                        @error('maps')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('razon_social', 'Razón social   ') !!}
                        {!! Form::text('razon_social', null, ['class' => 'form-control', 'placeholder' => 'Escriba la razón social']) !!}
                        @error('razon_social')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('parentesco', 'Parentesco contacto de emergencia') !!}
                        {!! Form::text('parentesco', null, ['class' => 'form-control', 'placeholder' => 'Escriba el parentesco de su contacto de emergenica']) !!}
                        @error('parentesco')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('pro_aut', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="pro_aut" value="0" />
                                <input type="checkbox" id="pro_aut" name="pro_aut" value="1" />                   
                        </div>
                        @error('e_aut')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('prov_act', 'Activar') !!}
                        <div >
                                <input type="hidden" name="prov_act" value="0" />
                                <input type="checkbox" id="prov_act" name="prov_act" value="1" />                   
                        </div>
                        @error('prov_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
                {{--segunda columna--}}
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('direccion', 'Direccion') !!}
                        {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Escriba su direccion']) !!}
                        @error('direccion')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                     <div class="form-group">
                        {!! Form::label('rfc', 'RFC') !!}
                        {!! Form::text('rfc', null, ['class' => 'form-control', 'placeholder' => 'Escriba su RFC']) !!}
                        @error('rfc')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('banco', 'Banco') !!}
                        <select name="banco" id="banco" class="form-control">
                            <option value="">--Escoja un banco--</option>
                            @foreach ($bancos as $banco )
                                <option value="{{$banco['nombre_banco']}}">{{$banco['nombre_banco']}}</option>
                            @endforeach
                        </select>
                        @error('banco')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('cuenta_bancaria', 'Cuenta bancaria') !!}
                        {!! Form::text('cuenta_bancaria', null, ['class' => 'form-control', 'placeholder' => 'Escriba su cuenta bancaria']) !!}
                        @error('cuenta_bancaria')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('tipo_pago', 'Tipo del pago') !!}
                        <select name="tipo_pago" id="tipo_pago" class="form-control">
                            <option value="">--Escoja uno--</option>
                            <option value="credito">Crédito</option>
                            <option value="contado">Contado</option>
                        </select>
                        @error('tipo_pago')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group" id="cantidad_credito">
                        {!! Form::label('cantidad_credito', 'Cantidad de Crédito') !!}
                        {!! Form::text('cantidad_credito', null, ['class' => 'form-control', 'placeholder' => 'Escriba la cantidad de crédito']) !!}
                        @error('cantidad_credito')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group" id="dias_credito">
                        {!! Form::label('dias_credito', 'Días de crédito') !!}
                        {!! Form::text('dias_credito', null, ['class' => 'form-control', 'placeholder' => 'Escriba los días de crédito']) !!}
                        @error('dias_credito')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
            </div>
            {!! Form::submit('Guardar nuevo empleado', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div> 
    </div>
@endsection

<script >
    $(document).ready(function(){
    $("#cantidad_credito").css("display", "none");
    $("#dias_credito").css("display", "none");

    $("#tipo_pago").change(function(){

    var seleccion= $(this).children("option:selected").val();

    if (seleccion === "credito"){
        $("#cantidad_credito").css("display", "block");
        $("#dias_credito").css("display", "block");
    }
    });
    
    });
</script>
