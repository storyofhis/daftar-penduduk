<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Models\User;

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


// Route::get('/daftar-penduduk', function () {
//     return view('app');
// });

Route::get('/daftar-penduduk', [AppController::class, 'input']);
Route::post('/process-screening', [AppController::class, 'process']);