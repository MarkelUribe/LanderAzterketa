<?php

use App\Http\Controllers\HegaldiaController;
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
    return redirect('/hegaldiak');
});

Route::get('/hegaldiak', HegaldiaController::class . '@index')->name('hegaldiak');

Route::post('/hegaldiaUpdate', [HegaldiaController::class, 'update'])->name('hegaldiaUpdate');

