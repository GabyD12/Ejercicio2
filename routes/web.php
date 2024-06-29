<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ColaboradorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente/create',[ClienteController::class,'create']);
Route::post('cliente/store', [ClienteController::class,'store'])->name('cliente.store');
Route::get('cliente/listar',[ClienteController::class,'index'])->name('cliente.index');
Route::delete('cliente/{cliente}',[ClienteController::class,'destroy'])->name('cliente.destroy');
Route::get('cliente/{cliente}/editar',[ClienteController::class,'edit'])->name('cliente.edit');
Route::put('cliente/{cliente}',[ClienteController::class,'update'])->name('cliente.update');
Route::get('cliente/{id}',[ClienteController::class,'show'])->name('cliente.show');

Route::get('colaborador/create',[ColaboradorController::class,'create']);
Route::post('colaborador/store', [ColaboradorController::class,'store'])->name('colaborador.store');
Route::get('colaborador/listar',[ColaboradorController::class,'index'])->name('colaborador.index');
Route::delete('colaborador/{colaborador}',[ColaboradorController::class,'destroy'])->name('colaborador.destroy');
Route::get('colaborador/{colaborador}/editar',[ColaboradorController::class,'edit'])->name('colaborador.edit');
Route::put('colaborador/{colaborador}',[ColaboradorController::class,'update'])->name('colaborador.update');
Route::get('colaborador/{id}',[ColaboradorController::class,'show'])->name('colaborador.show');