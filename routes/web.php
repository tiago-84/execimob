<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imoveis', [PropertyController::class, 'index']);

Route::get('/imoveis/novo', [PropertyController::class, 'create']);
Route::post('/imoveis/store', [PropertyController::class, 'store']);

Route::get('/imoveis/{name}', [PropertyController::class, 'show']);

Route::get('/imoveis/editar/{name}', [PropertyController::class, 'edit']);
Route::put('/imoveis/update/{name}', [PropertyController::class, 'update']);
