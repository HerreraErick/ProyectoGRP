@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO USUARIO</h2>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre del usuario']) !!}
                @error('nombre')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo Electronico') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico']) !!}
                @error('email')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('contraseña', 'Contraseña') !!}
                {!! Form::text('contraseña', null, ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}
                @error('contraseña')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('perfil', 'Perfil') !!}
                <select name="perfil" id="perfil" class="form-control">
                    <option value="">--Escoja un perfil--</option>
                    @foreach ($perfiles as $perfil )
                        <option value="{{$perfil['nom_perfil']}}">{{$perfil['nom_perfil']}}</option>
                    @endforeach
                </select>
                @error('perfil')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div> 
            <div class="form-group">
                {!! Form::label('proveedor', 'Proveedor') !!}
                <select name="proveedor" id="proveedor" class="form-control">
                     <option value="">--Escoja un provedor--</option>   
                    @foreach ($provedores as $provedor )
                        <option value="{{$provedor['nombre_comercial']}}">{{$provedor['nombre_comercial']}}</option>
                    @endforeach
                </select>
                @error('provedor')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('u_act', 'activo') !!}
                <div class="form-control">
                    <input type="hidden" name="u_act" value="0" />
                    <input type="checkbox" id="u_act" name="u_act" value="1" />
                </div>
                @error('u_act')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('u_aut', 'Autorizado') !!}
                <div class="form-control">
                    <input type="hidden" name="u_aut" value="0" />
                    <input type="checkbox" id="u_aut" name="u_aut" value="1" />                   
                </div>
                @error('u_aut')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>

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

                {!! Form::submit('Guardar nuevo usuario', ['class'=>'btn btn-primary']) !!}
            </form>
        </div>
    </div>

    
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
