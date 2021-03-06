<?php

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



// Route::get('articles', function () {
//     // If the Content-Type and Accept headers are set to 'application/json',
//     // this will return a JSON structure. This will be cleaned up later.
//     return Article::all();
// });

// Route::get('articles/{id}', function ($id) {
//     return Article::find($id);
// });

// Route::post('articles', function (Request $request) {
//     return Article::create($request->all);
// });

// Route::put('articles/{id}', function (Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function ($id) {
//     Article::find($id)->delete();

//     return 204;
// });


// Route::get('articles', function () {
//     $a = Auth::guard('api')->user(); // instance of the logged user
//     $b = Auth::guard('api')->check(); // if a user is authenticated
//     $c = Auth::guard('api')->id();

//     var_dump($a);

//     return Article::all();
// });


// Auth::guard('api')->user(); // instance of the logged user
// Auth::guard('api')->check(); // if a user is authenticated
// Auth::guard('api')->id();

//GOOD:
Route::apiResource('articles', 'ArticleController');


//Route::apiResource('contacts', 'ContactController');


// Route::get('articles', 'ArticleController@index');
// Route::get('articles/{article}', 'ArticleController@show');
// Route::post('articles', 'ArticleController@store');
// Route::put('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@delete');



// Route::group(['middleware' => 'auth:api'], function () {
//     Route::get('articles', 'ArticleController@index');
//     Route::get('articles/{article}', 'ArticleController@show');
//     Route::post('articles', 'ArticleController@store');
//     Route::put('articles/{article}', 'ArticleController@update');
//     Route::delete('articles/{article}', 'ArticleController@delete');
// });


Route::post('store', 'GuzzlePostController@store');
Route::get('index', 'GuzzlePostController@index');
