<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['id_activos','nombre','categoria','descripcion','almacen','costo_adquisicion','fecha_adquisicion','codigo','asignacion'];
    protected $primaryKey = 'id_activos';
    protected $table = "activos";
}
