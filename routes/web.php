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

Route::get('nouvellepage','App\Http\Controllers\MonControleur@retourneNouvellePage');
Route::get('membrescss', 'App\Http\Controllers\MonControleur@retournePageExemple');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo '<h1>Bonjour !</h1>';
});

Route::get('/bonjour/{nom}', function ($nom) {
    echo "Bonjour " . $nom;
});