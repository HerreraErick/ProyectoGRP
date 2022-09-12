<?php

namespace App\Http\Controllers\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfil;

class perfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfil::all();
        return view('perfiles.index', compact('perfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiles.create');
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
            ['nom_perfil'=> 'required',
            'permisos' => 'required',
            'p_act' => 'required',
            ]
        );

        

        Perfil::create($request->all());
        return redirect()->route('perfiles.index')->with('mensaje','El perfil se registró correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('perfiles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfile)
    {
        return view('perfiles.edit', compact( 'perfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfile)
    {

        $request->validate(
            ['nom_perfil'=> 'required',
            'permisos' => 'required',
            'p_act' => 'required',
            ]
        );

        

        $perfile->update($request->all());
        return redirect()->route('perfiles.index')->with('mensaje','El perfil se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfile)
    {
        $perfile->delete();
        return redirect()->route('perfiles.index')->with('mensaje','El perfil se eliminó satisfactoriamente');
    }
}
