<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/seti', function(){
    return "ver lista de estudiantes";
});


Route::get('/seti/{id}', function (){
    return 'Obteniendo estudiantes';
});

Route::post('/seti', function (){
    return 'Crear estudiantes';
});

Route::put('/seti/{id}', function (){
    return 'Actulizando estudiantes';
});


Route::delete('/seti/{id}', function (){
    return 'Eliminar estudiante';
});
