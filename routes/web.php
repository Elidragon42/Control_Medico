<?php

use App\Http\Controllers\HistorialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/procedimientos', function () {
    return view('procedimientos');
});


Route::get('/Empleados', function () {
    return view('Empleados');
});

Route::get('/consultas', [HistorialController::class, 'index'])->name('consultas.index');
Route::get('/index', [HistorialController::class, 'index'])->name('consultas.index');

Route::get('/historial/create', [HistorialController::class, 'create'])->name('historial.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
