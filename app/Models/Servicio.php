<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['foto','clave','nombre','descripcion_corta','caracteristicas','modulo','id_categoria', 'id_familia', 'id_grupo','lista_precio','s_act','s_aut'];
    protected $primaryKey = 'id_servicios';
    protected $table = "servicios";
}
