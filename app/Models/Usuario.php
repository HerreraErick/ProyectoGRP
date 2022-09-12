<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    
    use HasFactory;

    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['foto','nombre','email', 'contraseña', 'perfil', 'proveedor','u_act','u_aut'];
    protected $primaryKey = 'id_usuarios';
    protected $table = "usuarios";
    protected $check = [
        'u_act' => 'boolean',
        'u_aut' => 'boolean',
    ];
}
