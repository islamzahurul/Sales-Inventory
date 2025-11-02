<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('healthCheck', function () {
    return response()->json([
        'status' => 'OK',
        'message' => 'API is healthy',
        'data' => [],
        'errors' => []

    ], 200);
});

Route::prefix('auth')->group(function () {
    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');
});
