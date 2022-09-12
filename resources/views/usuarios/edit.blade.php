@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h2>Editar usuario {{$usuario->nombre}}</h2>
@stop

@section('content')
 

       <div class="card">
        <div class="card-body">
            <form action="{{route('usuarios.update', $usuario->id_usuarios)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre') !!}
                <input name="nombre" value="{{$usuario->nombre}}" class="form-control">
                
                @error('nombre')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Correo Electronico') !!}
                <input name="email" value="{{$usuario->email}}" class="form-control">
                @error('email')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('contraseña', 'Contraseña') !!}
                <input name="contraseña" value="{{$usuario->contraseña}}" class="form-control">
                @error('contraseña')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('perfil', 'Perfil') !!}
                <select name="perfil" id="perfil" class="form-control">
                    @foreach ($perfiles as $perfil )
                        <option value="{{$perfil->nom_perfil}}" {{$perfil->nom_perfil ==  $usuario->perfil ? 'selected' : ''}}>{{$perfil->nom_perfil}}</option>
                    @endforeach
                </select>
                @error('perfil')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div> 
            <div class="form-group">
                {!! Form::label('provedor', 'Proveedor') !!}
                <select name="provedor" id="provedor" class="form-control"> 
                    @foreach ($provedores as $provedor )
                        <option value="{{$provedor->nombre_comercial}}" {{$provedor->nombre_comercial ==  $usuario->provedor ? 'selected' : ''}}>{{$provedor->nombre_comercial}}</option>
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
                    <input  type="checkbox" id="u_act" name="u_act" value="1"  @if(old('u_act', $usuario->u_act) =="1" ) checked @endif>
                    
                </div>
                @error('u_act')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('autorizado', 'Autorizado') !!}
                <div class="form-control">
                    <input type="hidden" name="autorizado" value="0" />
                    <input type="checkbox" id="autorizado" name="autorizado" value="1" @if(old('autorizado', $usuario->autorizado) =="1" ) checked @endif/>                   
                </div>
                @error('autorizado')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('foto', 'Foto') !!}
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <img src="{{asset($usuario->foto)}}" id="imagenseleccionada" style="max-height: 300px">
                </div>
                <input type="file" name="foto"  class="form-control-file" id="foto" value="{{$usuario->foto}}" > 
               
                @error('nombre')
                    <span class="text-danger">Falta dato</span>                    
                @enderror
            </div>
                {!! Form::submit('Actualizar usuario', ['class'=>'btn btn-primary']) !!}
            </form>
        </div>
    </div>
@stop
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