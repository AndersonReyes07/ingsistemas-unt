<?php

use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BienvenidoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\NoticiaController;

//INICIO DE LA PAGINA
Route::get('/',[BienvenidoController::class,'mostrar'])->name('inicio');
Route::get('/Horarios', [BienvenidoController::class,'horario'])->name('horario');
Route::get('/Plana-Docente',[BienvenidoController::class,'docente'])->name('docente');
Route::get('/Plan-de-Estudios', [BienvenidoController::class,'plan'])->name('plan');
Route::get('/Malla-Curricular', [BienvenidoController::class,'malla'])->name('malla');
Route::get('/Horario/PDF', [BienvenidoController::class,'imprimir'])->name('pdf');


///////////////////////////////////////

//LOGIN///////////
Route::resource('/Experiencia', ExperienciaController::class);
Route::get('/Inicio/Sesion', function () {
    return view('login.logine');    
})->name('login');
Route::post('Inicio/Sesión',[AdministradorController::class,'identificacion'])->name('identificar');
Route::resource('/Admin', AdministradorController::class);
Route::get('Salir', [AdministradorController::class,'salir'])->name('salir');
Route::get('/Inicio-Sesion', function () {
   return redirect()->route('Admin.index')->with('datos','Registro Cancelado...!');
})->name('cancelar');

Route::get('/Registro', [AdministradorController::class,'registro'])->name('registro');
/////////////
Route::resource('/Noticia', NoticiaController::class);

