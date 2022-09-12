<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Provedor;
use App\Models\Perfiladmin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;



class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $provedores = Provedor::all();
        $perfiles = Perfiladmin::all();

        return view('usuarios.create', compact('provedores', 'perfiles'));
           
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['nombre'=> 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'perfil' => 'required',
            'proveedor' => 'required',
           
            ]
        );
        $usuario = $request->all();
        if($imagen = $request->file('foto')->store('public/usuarios')){
            $ruta = Storage::url($imagen);
            $usuario['foto'] = "$ruta";
        } 
        
        Usuario::create($usuario);
        return redirect()->route('usuarios.index')->with('mensaje','El usuario se registró correctamente');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
       return view('usuarios.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        $provedores = Provedor::all();
        $perfiles = Perfiladmin::all();

        

        return view('usuarios.edit', compact('provedores', 'perfiles', 'usuario'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate(
            ['nombre'=> 'required',
            'email' => 'required',
            'contraseña' => 'required',
            'perfil' => 'required',
            'provedor' => 'required',

            ]
        );
        
        $user = $request->all();
        if($request->hasFile('foto'))
        {
            $imagen = $request->file('foto')->store('public/usuarios');
            $ruta = Storage::url($imagen);
            $user['foto'] = "$ruta";   
            $ruta = str_replace('storage', 'public',$usuario->foto);
            Storage::delete($ruta);
            $usuario->update($user);
            
            return redirect()->route('usuarios.index')->with('mensaje','El usuario se actualizó correctamente');
        }
        else
        {
            $usuario->update($user);
            return redirect()->route('usuarios.index')->with('mensaje','El usuario se actualizó correctamente');
        }
        
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        
        $ruta = str_replace('storage', 'public',$usuario->foto);
        Storage::delete($ruta);
        
        
        
        $usuario->delete($usuario);
        return redirect()->route('usuarios.index')->with('mensaje','El usuario se eliminó correctamente');
       
    }
}
