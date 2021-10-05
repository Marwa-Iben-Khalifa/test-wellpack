<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

// route Get / permet d'acceder à la point de depart de notre projet: 127.0.0.1/8000
Route::get('/', function () {
    return view('welcome');
});

// route Post  /register  permet de recuperer les champs renseigner et les enregistrer dans la table utilisateurs
Route::post("/register", [UsersController::class,'store']);


// route Get /utilisateurs  permet d'acceder à la BDD et de  recuperer toutes les Data pour l'affichier par la suite
Route::get("/utilisateurs", [UsersController::class,'index']);
