<?php

namespace App\Http\Controllers\Servicio;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Categoria;
use App\Models\Familia;
use App\Models\Grupo;


class servicioController extends Controller
{
    
    public function getfamilias($id)
    {
        $familias = Familia::where('id_categoria', $id)->get();
        return $familias;
    }
    public function getgrupos($id)
    {
        $grupos = Grupo::where('id_familia', $id)->get();
        return $grupos;
    }


    public function index()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    
   
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $servicios = Servicio::all();
        $familias = Familia::all();
        $categorias = Categoria::all();
        $grupos = Grupo::all();
        return view('servicios.create', compact('servicios','familias','grupos','categorias'));
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = $request->all();

       

       

        Servicio::create($servicio);
        return redirect()->route('servicios.index')->with('mensaje','El servicio se registró correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
