<?php

use Illuminate\Support\Facades\Route;

/* EJERCICIO 1 */
Route::get('/saludo', function () {
    return 'Bienvenido al examen de laravel';
});

/* EJERCICIO 2 */
Route::get('/usuario/{nombre}', function ($nombre) {
    return "Hola, $nombre";
});

/* EJERCICIO 4 */
Route::get('/alumnos', function () {
    $alumnos = DB::table('alumnos')->get();
    return response()->json($alumnos);
});

/* Ejercicio 5*/

Route::get('/alumno/{id}', function ($id) {
    $alumno = DB::table('alumnos')->where('id', $id)->first();

    if ($alumno) {
        return response()->json($alumno);
    } else {
        return response()->json([
            'error' => 'Alumno desconocido'
        ]);
    }
});
