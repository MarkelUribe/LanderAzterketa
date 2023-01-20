<?php
use App\Models\Hegaldia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hegaldiak', function(){
    return Hegaldia::All();
});

Route::get('hegaldiak/{id}', function($id){
    return Hegaldia::find($id);
});

Route::delete('deletehegaldia/{id}', function($id){
    Hegaldia::find($id)->delete();
    return 204;
});