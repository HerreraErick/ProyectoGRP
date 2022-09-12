<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayuntamiento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $primaryKey = 'id_ayuntamiento';
    protected $table = "ayuntamiento";
    protected $fillable = ['id_ayuntamiento','nombre','descripcion','direccion','correo_contacto','telefono_contacto','facebook','instagram', 'pagina_web'];
}
