<?php

namespace App\Http\Controllers\Ayuntamiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ayuntamiento;

class AyuntamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ayuntas = Ayuntamiento::all();
        return View('ayuntamiento.index', compact('ayuntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ayuntamiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ayunta = $request->all();

        Ayuntamiento::create($ayunta);
        return redirect()->route('ayuntamientos.index')->with('mensaje', 'El ayuntamiento se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ayuntamiento $ayuntamiento)
    {
        return view('ayuntamiento.edit', compact('ayuntamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ayuntamiento $ayuntamiento)
    {
        //$request->validate(['nombre']);

        $ayuntamiento->update($request->all());
        return redirect()->route('ayuntamientos.index')->with('mensaje', 'El ayuntamiento se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ayuntamiento $ayuntamiento)
    {
        $ayuntamiento->delete();
        return redirect()->route('ayuntamientos.index')->with('mensaje', 'El ayuntamiento se eliminó correctamente');
    }
}
