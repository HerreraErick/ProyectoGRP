@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h2>CREAR NUEVO SERVICIO</h2>
    
@stop
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>












@section('content')



<form action="{{route('servicios.store')}}" method="POST" enctype="multipart/form-data">
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
                        <div class="grid grid-cols-1 mt-2 mx-1">
                            <img id="imagenseleccionada" style="max-height: 300px">
                        </div>
                        <input type="file" name="foto"  class="form-control-file" id="foto" > 
                        @error('foto')
                            <span class="text-danger">Falta dato</span>                    
                        @enderror
                    </div>
                
                    <div class="form-group">
                        {!! Form::label('clave', 'Clave') !!}
                        {!! Form::text('clave', null, ['class' => 'form-control', 'placeholder' => 'Escriba la clave']) !!}
                        @error('clave')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
                    
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nombre', 'Nombre') !!}
                        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Escriba el nombre']) !!}
                        @error('nombre')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('descripcion_corta', 'Descripción') !!}
                        {!! Form::text('descripcion_corta', null, ['class' => 'form-control', 'placeholder' => 'Escriba una breve descripción']) !!}
                        @error('descripcion_corta')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div> 
                </div>
        </div>

        <div class="form-group">
            {!! Form::label('caracteristicas', 'Caracteristicas') !!}
            <div id="caracteristicas">
                {!! Form::text('caracteristicas', 'caracteristicas', null) !!}
            </div>
            @error('caracteristicas')
                <span class="text-danger">Falta dato</span>
            @enderror
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
                        {!! Form::label('id_categoria', 'Categoria') !!}
                        <select name="id_categoria" id="id_categoria" class="form-control">
                            <option value="">--Escoja una categoria--</option>
                            @foreach ($categorias as $categoria )
                                <option value="{{$categoria['id_categoria']}}">{{$categoria['categoria']}}</option>
                            @endforeach
                        </select>
                        @error('id_categoria')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id_familia', 'Familia') !!}
                        <select  name="id_familia" id="id_familia" class="form-control" disabled>
                            <option value="">--Escoja una familia--</option>
                        </select>
                        @error('id_familia')
                            <span class="text-danger">Falta dato</span>
                        @enderror
                    </div>
                </div>


            </div>
                <div class="form-group">
                    {!! Form::label('id_grupo', 'Grupos') !!}
                    <select name="id_grupo" id="id_grupo" class="form-control" disabled>
                        <option value="">--Escoja un grupo--</option>
                    </select>
                    @error('id_grupo')
                        <span class="text-danger">Falta dato</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('modulo', 'Modulo') !!}
                    {!! Form::text('modulo', null, ['class' => 'form-control', 'placeholder' => 'Escriba el modulo']) !!}
                    @error('modulo')
                        <span class="text-danger">Falta dato</span>
                    @enderror
                </div> 
                <div class="form-group">
                    {!! Form::label('s_act', 'Activo') !!}
                    <div >
                            <input type="hidden" name="s_act" value="0"  />
                            <input type="checkbox" id="s_act" name="s_act" value="1"  />                   
                    </div>
                    @error('s_act')
                        <span class="text-danger">Falta dato</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('s_aut', 'Autorizar') !!}
                    <div >
                            <input type="hidden" name="s_aut" value="0"  />
                            <input type="checkbox" id="s_aut" name="s_aut" value="1"  />                   
                    </div>
                    @error('s_aut')
                        <span class="text-danger">Falta dato</span>
                    @enderror
                </div>
        </div>
    </div>

    <div class="card card-default">
        {{-- Lista de precios --}}
        <div class="card-header">
            <h3 class="card-title">Lista de precios</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
    
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Nombre de lista</th>
                            <th>Precio</th>
                            <th colspan="1">Acciones</th>
                     </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicios as $servicio)
                         <tr>
                                
                        </tr>
                      @endforeach
                 </tbody>
             </table>
            </div>
            </div>
            {!! Form::submit('Guardar nuevo servicio', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
        </form>
    
    


        <script>
            
            ClassicEditor
                .create( document.querySelector( '#caracteristicas' ) )
                .catch( error => {
                 console.error( error );
                } );
        </script>
            



         <script>
          $(function(){
            $('#id_categoria').on('change', onSelectCategory);
           
          })  ; 

          function onSelectCategory(){
              var categoria_id = $(this).val();

              $.get('/api/categoria/'+categoria_id+'/familias', function(data){
                var html_familia = '<option value="">--Escoja una familia--</option>';
                  for (var i=0; i<data.length; i++)
                  html_familia += '<option value="'+data[i].id_familia+'">'+data[i].familia+'</option>';
                  $('#id_familia').html(html_familia);
              });
              
              
          }

        </script>  
        <script>
            $(function(){
              $('#id_familia').on('change', onSelectFamily);
             
            })  ; 
  
            function onSelectFamily(){
                var familia_id = $(this).val();
  
                $.get('/api/familia/'+familia_id+'/grupos', function(data){
                  var html_grupo = '<option value="">--Escoja un grupo--</option>';
                    for (var i=0; i<data.length; i++)
                    html_grupo += '<option value="'+data[i].id_grupos+'">'+data[i].grupo+'</option>';
                    $('#id_grupo').html(html_grupo);
                });
                
                
            }
  
          </script>  

        <script>
            $("#id_categoria").change(function() {
                if($("#id_categoria").val()){
                    $('#id_familia').prop('disabled', false);
                }else{
                    $('#id_familia').prop('disabled', 'disabled');
                    $('#id_grupo').prop('disabled', 'disabled');
                     }
             });
        </script>
        <script>
            $("#id_familia").change(function() {
                if($("#id_familia").val()){
                    $('#id_grupo').prop('disabled', false);
                }else{
                    $('#id_grupo').prop('disabled', 'disabled');                     
                     }
             });
        </script>
          
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

