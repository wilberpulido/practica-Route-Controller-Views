<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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
//ruta raiz, una funcion anonima
// con ->middleware('auth') agrego un middleware precondigurado para autenticar en laravel
// Si proteges la ruta, no pasara hasta el controlador sin pasar por el middlerware
Route::get('/', function () 
{
    return view('welcome');
})->middleware('auth');



//Con esto hacemos lo mismo que arriba, retornar una vista simplemente.
//Aca pasamos una variable app, sin embargo, tenemos que entender que la idea es trabajar con controladores
Route::view('vista','welcome',['app' => 'hola']); 
//Puedes configurar que retorne archivo en pdf, un texto, cualquier cosa que necesites retornar
Route::get('/prueba', function () {
    return 'prueba';
});
//Con este metodo nos aseguramos de que se creen las 7 rutas de un crud con pages como base y PageController commo controlador
// Con ->middleware('auth') protegeremos las 7 rutas que crea ::resource
Route::resource('pages',
    PageController::class)
    ->middleware('auth');

//Practica validaciones
// Route::get('posts',function()
// {
//     return view('posts.index');
// });
// Se puede pasar de esa forma la vista sin pasar por el controlador, sin embargo, la idea de la ruta es que
//se maneje la lógica dentro del controlador.
Route::get('posts',
    [PostController::class, 'index']
    )->name('posts.index');
Route::post(
    'posts',
    [PostController::class, 'store']
    )->name('posts.store');
//Practica de Blade

Route::get(
    'blade',
    function()
    {   
        return view('home');
    }
);