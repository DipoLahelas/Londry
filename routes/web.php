<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
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

Route::get('detailIndex', [DetailController::class, 'index']);
Route::post('detailStore', [DetailController::class, 'store']);
Route::post('detailUpdate/{up}', [DetailController::class, 'update']);
Route::post('detailDel/{up}', [DetailController::class, 'destroy']);
Route::get('detailSearch/{up}', [DetailController::class, 'show']);
