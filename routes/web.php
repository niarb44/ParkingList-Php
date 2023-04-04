<?php

use App\Http\Controllers\PersonController;
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

Route::get('/persons', [PersonController::class, 'index']);
Route::get('/persons/create', [PersonController::class, 'create']);
Route::post('/persons', [PersonController::class, 'store']);
Route::get('edit-person/{person_numbers}', [PersonController::class, 'edit']);
Route::put('update-person/{person_numbers}', [PersonController::class, 'update']);
Route::delete('delete-person/{person_numbers}',  [PersonController::class, 'destroy']);
