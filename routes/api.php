<?php
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    // Todas las rutas definidas aquí adentro comenzarán con /v1/
    Route::apiResource('products', ProductController::class);

    // Si en el futuro agregas más endpoints para la v1, irían aquí.
    // Por ejemplo: Route::apiResource('users', UserController::class);
});
