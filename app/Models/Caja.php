<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
   
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['id_cajasBancos','nombre_banco','numero_cuenta','sucursal','clabe','id_usuario','caj_act','caj_aut'];
    protected $primaryKey = 'id_cajasBancos';
    protected $table = "cajas_bancos";
}