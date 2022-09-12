<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Departamento;
use App\Models\Banco;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use JeroenNoten\LaravelAdminLte\Components\Widget\Alert;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        $bancos = Banco::all();
        $depas = Departamento::all();
        $now = Carbon::now();
        return view('empleados.create', compact('empleados', 'bancos', 'depas', 'now'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate(
            ['nombre'=> 'required',
            'sexo' => 'required',
            'fecha_nacimiento' => 'required',
            'municipio' => 'required',
            'nacionalidad'=> 'required',
            'estado_civil' => 'required',
            'grado_estudios' => 'required',
            'telefono' => 'required',
            'direccion'=> 'required',
            'curp' => 'required',
            'rfc' => 'required',
            'banco' => 'required',
            'cuenta_bancaria'=> 'required',
            'nombre_emergencia' => 'required',
            'telefono_emergencia' => 'required',
            'parentesco_emergencia' => 'required',
            'puesto'=> 'required',
            'clasificacion' => 'required',
            'departamento' => 'required',
            'fecha_ingreso' => 'required',
            'cal_trabajando' => 'required',
            'sal_diario' => 'required',
            'cal_monto' => 'required',
            'monto_extra' => 'required',
            'monto_infonavit' => 'required',
            'prima_vacacional' => 'required',
            'sol_baja' => 'required',
            'fecha_baja' => 'required',
            'e_act' => 'required',
            'e_aut' => 'required'
            ]
        );*/
        

       

        $empleado = $request->all();

       

        if($image = $request->file('foto')->store('public/empleados')){
            $rut = Storage::url($image);
            $empleado['foto'] = "$rut";
        } 

        Empleado::create($empleado);
        return redirect()->route('empleados.index')->with('mensaje','El empleado se registró correctamente');
        
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
