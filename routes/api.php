<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
HistorialController,
LoginController,
NotificationEmailController,
ProcedimientosController,
ProfileController,
ConsultaController
};

// Rutas de autenticación
Route::post('/iniciar_sesion', [LoginController::class, 'login']);
Route::post('/registrarse', [LoginController::class, 'register']);
Route::post('/cerrar_sesion', [LoginController::class, 'logout']);

// Rutas de procedimientos
Route::middleware('auth:sanctum')->group(function () {
Route::apiResource('procedimientos', ProcedimientosController::class);

// Rutas de historial
Route::apiResource('historial', HistorialController::class);

// Rutas de perfil
Route::get('/profile', [ProfileController::class, 'edit']);
Route::patch('/profile', [ProfileController::class, 'update']);
Route::delete('/profile', [ProfileController::class, 'destroy']);

// Rutas adicionales
Route::post('/pruebaemail', [NotificationEmailController::class, 'enviarCorreosPendientes']);
});

// Rutas adicionales fuera del middleware de autenticación
Route::get('/prueba', function () {
return new PruebaMail();
});