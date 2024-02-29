<?php

use App\Http\Controllers\inventoryController;
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

Route::get('/inventory', [inventoryController::class,'index']);
Route::get('/inventory/create', [inventoryController::class,'create']);
Route::post('/inventory/store', [inventoryController::class,'store']);
Route::get('/inventory/{id}/edit', [inventoryController::class,'edit']);
Route::put('/inventory/{id}', [inventoryController::class,'update']);
Route::delete('/inventory/{id}', [inventoryController::class,'delete']);
