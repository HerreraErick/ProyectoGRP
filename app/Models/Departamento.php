<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $primaryKey = 'id_depa';
    protected $table = "departamento";
}
