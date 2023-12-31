<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\TreinoController;
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
    return view('home');
});*/

Route::get('/',[HomeController::class, 'index'])->name( 'home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get( '/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get( '/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.muscalacao');


