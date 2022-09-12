<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Perfil\perfilController;
use App\Http\Controllers\empleado\empleadoController;
use App\Http\Controllers\Proveedor\proveedorController;
use App\Http\Controllers\Servicio\servicioController;
use App\Http\Controllers\categoria\CategoriaController;
use App\Http\Controllers\familia\FamiliaController;
use App\Http\Controllers\grupo\GrupoController;
use App\Http\Controllers\activo\ActivoController;
use App\Http\Controllers\caja\CajaController;
use App\Http\Controllers\Ayuntamiento\AyuntamientoController;


Route::get('', [HomeController::class, 'index']);

Route::resource('/usuarios', UsuarioController::class)->names('usuarios');
Route::resource('/perfiles', perfilController::class)->names('perfiles');
Route::resource('/empleados', empleadoController::class)->names('empleados');
Route::resource('/proveedores', proveedorController::class)->names('proveedores');
Route::resource('/servicios', servicioController::class)->names('servicios');
Route::resource('/categorias', CategoriaController::class)->names('categorias');
Route::resource('/familias', FamiliaController::class)->names('familias');
Route::resource('/grupos', GrupoController::class)->names('grupos');
Route::resource('/cajas', CajaController::class)->names('cajas');
Route::resource('/activos', ActivoController::class)->names('activos');
Route::resource('/ayuntamientos', AyuntamientoController::class)->names('ayuntamientos');



