<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Provedor extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $fillable = ['nombre','nombre_comercial','tipo_proveedor', 'nombre_representante', 'telefono_representante', 'correo_representante','telefono_contacto','direccion','maps','banco','nu_cuenta_bancaria','razon_social','rfc','tipo_pago','prov_act','pro_aut','correo_contacto','cuenta_bancaria','cantidad_credito','dias_credito'];
    protected $primaryKey = 'id_provedor';
    protected $table = "proveedores";
    public $timestamps = false;
}
