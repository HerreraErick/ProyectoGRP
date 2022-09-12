<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['categoria','grupo','fecha_creacion','g_act', 'familia'];
    protected $primaryKey = 'id_grupos';
    protected $table = "grupos";
}
