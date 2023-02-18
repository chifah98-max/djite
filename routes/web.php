<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/type/create', [TypeController::class, 'create']);
Route::post('/store', [TypeController::class, 'store']);
Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])->name('type.index');