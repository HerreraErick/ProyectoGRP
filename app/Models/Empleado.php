<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $primaryKey = 'id_empleados';
    protected $table = "empleados";
    protected $fillable = [
        'foto',
        'nombre',
        'sexo',
        'fecha_nacimiento',
        'municipio',
        'nacionalidad',
        'estado_civil',
        'grado_estudios',
        'telefono',
        'direccion',
        'curp',
        'rfc',
        'nombre_emergencia',
        'telefono_emergencia',
        'parentesco_emergencia',
        'puesto',
        'clasificacion',
        'departamento',
        'nombre_jefe',
        'fecha_ingreso',
        'cal_trabajando',
        'sal_diario',
        'nombre_banco',
        'nu_cuenta_bancaria',
        'cal_monto',
        'monto_extra',
        'monto_infonavit',
        'prima_vacacional',
        'sol_baja',
        'fecha_baja',
        'e_act',
        'e_aut',
    ];
}
