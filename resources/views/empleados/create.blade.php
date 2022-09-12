@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO EMPLEADOs</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


@section('content')


<form action="{{route('empleados.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
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
                        {!! Form::label('foto', 'Foto') !!}
                        <div class="grid grid-cols-1 mt-5 mx-7">
                            <img id="imagenseleccionada" style="max-height: 300px">
                        </div>
                        <input type="file" name="foto"  class="form-control-file" id="foto" > 
                        @error('foto')
                            <span class="text-danger">Falta dato</span>                    
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('sexo', 'Sexo') !!}
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="">--Escoja uno--</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Otro">Otro</option>
                        </select>
                        @error('sexo')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('nacionalidad', 'Nacionalidad') !!}
                        {!! Form::text('nacionalidad', null, ['class' => 'form-control', 'placeholder' => 'Nacionalidad']) !!}
                        @error('nacionalidad')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('estado_civil', 'Estado civil') !!}
                        <select name="estado_civil" id="estado_civil" class="form-control">
                            <option value="">--Escoja uno--</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viudo">Viudo</option>
                        </select>
                        @error('estado_civil')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre completo') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba su nombre completo']) !!}
                        @error('nombre')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('fecha_nacimiento', 'Fecha de nacimiento') !!}
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                               
                        @error('fecha_nacimiento')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('municipio', 'Municipio de nacimiento') !!}
                        {!! Form::text('municipio', null, ['class' => 'form-control', 'placeholder' => 'Escriba su municipio de nacimiento']) !!}
                        @error('municipio')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('grado_estudios', 'Ultimo grado de estudios') !!}
                        {!! Form::text('grado_estudios', null, ['class' => 'form-control', 'placeholder' => 'Escriba su ultimo grado de estudios']) !!}
                        @error('grado_estudios')
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
                        {!! Form::label('telefono', 'Telefono') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Escriba su telefono']) !!}
                        @error('telefono')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('curp', 'CURP') !!}
                        {!! Form::text('curp', null, ['class' => 'form-control', 'placeholder' => 'Escriba su CURP']) !!}
                        @error('curp')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('nombre_banco', 'Banco') !!}
                        <select name="nombre_banco" id="nombre_banco" class="form-control">
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
                        {!! Form::label('nombre_emergencia', 'Nombre contacto de emergencia') !!}
                        {!! Form::text('nombre_emergencia', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre de su contacto de emergenica']) !!}
                        @error('nombre_emergencia')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('parentesco_emergencia', 'Parentesco contacto de emergencia') !!}
                        {!! Form::text('parentesco_emergencia', null, ['class' => 'form-control', 'placeholder' => 'Escriba el parentesco de su contacto de emergenica']) !!}
                        @error('parentesco')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>

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
                        {!! Form::label('nu_cuenta_bancaria', 'Cuenta bancaria') !!}
                        {!! Form::text('nu_cuenta_bancaria', null, ['class' => 'form-control', 'placeholder' => 'Escriba la cuenta bancaria']) !!}
                        @error('nu_cuenta_bancaria')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('telefono_emergencia', 'Telefono contacto de emergencia') !!}
                        {!! Form::text('telefono_emergencia', null, ['class' => 'form-control', 'placeholder' => 'Escriba el telefono de su contacto de emergenica']) !!}
                        @error('telefono_emergencia')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="card card-default">
        {{-- Puesto --}}
        <div class="card-header">
            <h3 class="card-title">Puesto</h3>
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
                        {!! Form::label('puesto', 'Puesto') !!}
                        {!! Form::text('puesto', null, ['class' => 'form-control', 'placeholder' => 'Puesto']) !!}
                        @error('puesto')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('departamento', 'Departamento') !!}
                        <select name="departamento" id="departamento" class="form-control">
                            <option value="">--Escoja un departamento--</option>   
                           @foreach ($depas as $depa )
                               <option value="{{$depa['nom_depa']}}">{{$depa['nom_depa']}}</option>
                           @endforeach
                       </select>
                       <a href="">Generar nuevo departamento</a>
                        @error('departamento')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('fecha_ingreso', 'Fecha de ingreso') !!}
                        <input  type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" onkeyup="calcular()" >
                        
                        @error('fecha_ingreso')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('sal_diario', 'Salario diario') !!}
                        <input type="text" name="sal_diario" id="sal_diario" class="form-control" placeholder="salario diario" >
                        @error('sal_diario')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('monto_extra', 'Monto por hora extra') !!}
                        {!! Form::text('monto_extra', null, ['class' => 'form-control', 'placeholder' => 'monto_extra']) !!}
                        @error('monto_extra')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('prima_vacacional', 'Fecha de prima vacacional') !!}
                        <input type="date" name="prima_vacacional" id="prima_vacacional" class="form-control">
                        @error('prima_vacacional')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('clasificacion', 'Clasificacion') !!}
                        <select name="clasificacion" id="clasificacion"  class="form-control" >
                            <option value="">--Escoja uno--</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Operativo">Operativo</option>
                        </select>
                        
                        @error('clasificacion')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('nombre_jefe', 'Nombre del Jefe Directo') !!}
                        <select name="nombre_jefe" id="nombre_jefe" class="form-control">
                             <option value="o">--Escoja un provedor--</option>   
                             @foreach ($empleados as $empleado )
                                <option value="{{$empleado['nombre']}}">{{$empleado['nombre']}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        {!! Form::label( 'Tiempo laborando') !!}
                        {!! Form::text('cal_trabajando', null, ['class' => 'form-control', 'placeholder' => 'Calculo del tiempo trabajado' , 'readonly' => 'readonly', 'id' => 'cal_trabajando']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cal_monto', 'Calculo de monto') !!}
                        {!! Form::text('cal_monto', null, ['class' => 'form-control', 'placeholder' => 'Calculo del salario', 'readonly' => 'readonly', 'id' => 'cal_monto']) !!}
                        @error('cal_monto')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('monto_infonavit', 'Monto infonavit') !!}
                        {!! Form::text('monto_infonavit', null, ['class' => 'form-control', 'placeholder' => 'monto_infonavit']) !!}
                        @error('monto_infonavit')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('e_act', 'Activo') !!}
                        <div>
                            <input type="hidden" name="e_act" value="0" />
                                <input type="checkbox" id="e_act" name="e_act" value="1" />
                        </div>
                        @error('e_act')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('e_aut', 'Autorizar') !!}
                        <div >
                                <input type="hidden" name="e_aut" value="0" />
                                <input type="checkbox" id="e_aut" name="e_aut" value="1" />                   
                        </div>
                        @error('e_aut')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('sol_baja', 'Dar de baja?') !!}
                        <div >
                                <input type="hidden" name="sol_baja" value="0"  />
                                <input type="checkbox" id="sol_baja" name="sol_baja" value="1"  />                   
                        </div>
                        @error('sol_baja')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group" id="fecha_baja">
                        {!! Form::label('fecha_baja', 'Fecha de baja') !!}
                        <input type="date" name="fecha_baja" id="fecha_baja" class="form-control">
                        @error('fecha_baja')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>
            </div>
            {!! Form::submit('Guardar nuevo empleado', ['class' => 'btn btn-primary']) !!}
        </form>
        </div>
    </div>

@endsection





    <script>
        $(document).ready(function (e){
        $('#foto').change(function(){
            let reader = new FileReader();
            reader.onload = (e) =>{
                $('#imagenseleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
    </script>

<script >
    $(document).ready(function(){
    $("#fecha_baja").css("display", "none");
    $('#sol_baja').click(function(){
        if($('#sol_baja').is(':checked')){
            $("#fecha_baja").css("display", "block");
        }else{
            $("#fecha_baja").css("display", "none");
        }
    });
    });
</script>




<script>

    function prueba(fun){
        var funciones = {};
        funciones.ale1 = function (){
            $(document).ready(function () {
            $("#sal_diario").keyup(function () {
            var value = $(this).val()*15;
            $("#cal_monto").val(value);
        });
        });
        };
        funciones.ale2 = function (){
            $(document).ready(function () {
            $("#sal_diario").keyup(function () {
            var value = $(this).val()*30;
            $("#cal_monto").val(value);
        });
        });
        };

        return funciones[fun]();
        
    }
$(document).ready(function(){

    $("#clasificacion").change(function(){

    var seleccion= $(this).children("option:selected").val();

    if (seleccion === "Administrativo"){
        prueba("ale1");
    }else if(seleccion === "Operativo"){
        prueba("ale2");
    }
});
});
</script>

<script>  
     function calcular(){
         var ahora = moment();
         var fecha = document.getElementById('fecha_ingreso').value;
         var cal1 = ahora.diff(fecha, 'days')
         var cal2 = ahora.diff(fecha, 'months')
         var cal3 = ahora.diff(fecha, 'years')

         if(cal3 === 0 && cal2 === 0){
            $("#cal_trabajando").val(cal1 + 'dias laborando');
         }else if(cal3 === 0 && cal2 > 0 ){
            $("#cal_trabajando").val(cal1 + ' dias y ' + cal2 + ' meses laborando');
         }else if(cal3 > 0){
            $("#cal_trabajando").val(cal1 + ' dias, ' + cal2 + 'meses y '+ cal3 + ' años laborando');
         }

         
         
     }
        
</script>

