<?php

use App\Http\Controllers\questionController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ScoreController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/play' , [StudentsController::class, 'students']);

Route::get('/resultaat',[StudentsController::class, 'resultaat']);

Route::post('/play', [StudentsController::class, 'Checkstudentnr']);

Route::get('/student/{students}',[questionController::class, 'questionview']);
Route::put('/student/{students}',[ScoreController::class, 'UpdateScore']);



