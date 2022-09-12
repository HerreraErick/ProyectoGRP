<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['clave','familia','id_categoria','f_act', 'prorreater'];
    protected $primaryKey = 'id_familia';
    protected $table = "familia";

    
}

