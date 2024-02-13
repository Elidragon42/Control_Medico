<?php

use App\Http\Controllers\HistorialController;
use App\Http\Controllers\NotificationEmailController;
use App\Http\Controllers\ProcedimientosController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use Illuminate\support\Facades\Mail;
use App\Mail\PruebaMail;




//Route::middleware(['auth', 'verified'])->group(function () {
//  Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/', [HistorialController::class, 'index'])->name('consultas.index');

    Route::prefix('procedimientos')->group(function () {
        Route::get('/', [ProcedimientosController::class, 'index'])->name('procedimientos.index');
        Route::get('/create', [ProcedimientosController::class, 'create'])->name('procedimientos.create');
        Route::post('/store', [ProcedimientosController::class, 'store'])->name('procedimientos.store');
        Route::get('/{id}', [ProcedimientosController::class, 'show'])->name('procedimientos.show');
        Route::get('/{id}/edit', [ProcedimientosController::class, 'edit'])->name('procedimientos.edit');
        Route::post('/{id}/update', [ProcedimientosController::class, 'update'])->name('procedimientos.update');
        Route::delete('/{id}/delete', [ProcedimientosController::class, 'destroy'])->name('procedimientos.destroy');
    });

    Route::get('/Empleados', function () {
        return view('Empleados');
    });

    Route::prefix('historial')->group(function () {
        Route::post('/store', [HistorialController::class, 'store'])->name('historial.store');
        Route::get('/create', [HistorialController::class, 'create'])->name('historial.create');
        Route::get('/{id}', [HistorialController::class, 'show'])->name('historial.show');
        Route::get('/{id}/edit', [HistorialController::class, 'edit'])->name('historial.edit');
        Route::post('/{id}/update', [HistorialController::class, 'update'])->name('historial.update');
        Route::delete('/{id}/delete', [HistorialController::class, 'destroy'])->name('historial.destroy');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('/pruebaemail', [NotificationEmailController::class, 'enviarCorreosPendientes']);