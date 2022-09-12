<x-slot name="header">
	
</x-slot>

<div class="">
    <div class="container bg-white">
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>ID</th>

                <th>Foto</th>

                <th>Nombre</th>

                <th>Email</th>

                <th>Contraseña</th>

                <th>perfil</th>

                <th>Provedor</th>

                <th>Activo</th>

                <th>Autorizado</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>

                    <td>{{$usuario->id_usuarios}}</td>

                    <td>{{$usuario->foto}}</td>

                    <td>{{$usuario->nombre}}</td>

                    <td>{{$usuario->email}}</td>

                    <td>{{$usuario->contraseña}}</td>

                    <td>{{$usuario->perfil}}</td>

                    <td>{{$usuario->provedor}}</td>

                    <td>{{$usuario->u_act}}</td>

                    <td>{{$usuario->u_aut}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
