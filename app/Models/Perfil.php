<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['nom_perfil','fecha_creacion','permisos','p_act'];
    protected $primaryKey = 'id_perfil';
    protected $table = "perfil";
}
