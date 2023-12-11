<?php

use App\Http\Controllers\HistorialController;
use App\Http\Controllers\ProcedimientosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/procedimientos', [ProcedimientosController::class, 'index'])->name('procedimientos.index');
Route::get('/procedimientos/create', [ProcedimientosController::class, 'create'])->name('procedimientos.create');
Route::post('/procedimientos/create/store', [ProcedimientosController::class, 'store'])->name('procedimientos.store');
Route::get('/procedimientos/{id}', [ProcedimientosController::class, 'show'])->name('procedimientos.show');
Route::get('/procedimientos/{id}/edit', [ProcedimientosController::class, 'edit'])->name('procedimientos.edit');
Route::post('/procedimieno/{id}/update', [ProcedimientosController::class, 'update'])->name('procedimientos.update');
Route::delete('/procedimieno/{id}/delete', [ProcedimientosController::class, 'destroy'])->name('procedimientos.destroy');



Route::get('/Empleados', function () {
    return view('Empleados');
});


Route::get('/index', [HistorialController::class, 'index'])->name('consultas.index');
Route::post('/historial/store', [HistorialController::class, 'store'])->name('historial.store');
Route::get('/historial/create', [HistorialController::class, 'create'])->name('historial.create');
Route::get('/historial/{id}', [HistorialController::class, 'show'])->name('historial.show');
Route::get('/historial/{id}/edit', [HistorialController::class, 'edit'])->name('historial.edit');
Route::delete('/historial/{id}/delete', [HistorialController::class, 'destroy'])->name('historial.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
