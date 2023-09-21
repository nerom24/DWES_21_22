<?php
namespace App\Http\Controllers;
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

Route::get('/', HomeController::class)->name('index');

Route::get('/articulos', [ArticuloController::class, 'index'])->name('articulos');
Route::get('/articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');
Route::get('/articulos/edit/{id}', [ArticuloController::class, 'edit'])->name('articulos.edit');
Route::get('/articulos/show/{id}', [ArticuloController::class, 'show'])->name('articulos.show');
Route::get('/articulos/delete/{id}', [ArticuloController::class, 'destroy'])->name('articulos.delete');
Route::post('/articulos/store', [ArticuloController::class, 'store'])->name('articulos.store');