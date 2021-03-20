<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('blog2');
});



Route::get('/blog', function () {
    return view('blog');
});

Route::get('login', function () {
    return view('floating');
}); */

Route::get('/', function () {
    return view('index');
});

Route::get('empleado_index', function () {
    return view('empleado_index');
});

Route::resource('empleados', 'app\Http\Controllers\empleado');

Route::get('empleado_servicio_index', function () {
    return view('empleado_servicio_index');
});

Route::get('jornada_index', function () {
    return view('jornada_index');
});


Route::get('index', function () {
    return view('index');
});

Route::get('sistema', function () {
    return view('tipo_sistema');
    });
Route::get('redes', function () {
    return view('mantenimiento_instalacion_redes');
    });
Route::get('equipo', function () {
    return view('mantenimiento_instalacion_equipo');
    });
Route::get('base', function () {
    return view('base_datos');
    });
Route::get('proteccion', function () {
    return view('proteccion_datos');
    });


// LA / sirve para saber en que carpeta te encuentras, el view lo que se vera
// si quieres ingresar a una carpeta colcoa empresa.index
// La ruta puede llamarse como sea