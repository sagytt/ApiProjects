<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('/v1/flights', v1\FlightController::class, [
//    'except'  => ['create', 'edit']
//]);


//List Articles
Route::get('article', 'ArticleController@index');

//List single Articles
Route::get('article/{id}', 'ArticleController@show');

//Crete new Articles
Route::post('article', 'ArticleController@store');

//Update Articles
Route::put('articles', 'ArticleController@store');

//Update Articles
Route::delete('articles', 'ArticleController@destroy');

