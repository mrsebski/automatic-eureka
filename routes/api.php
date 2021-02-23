<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Article;
use App\Models\Auth\RegisterController;






Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Route::get('users', [UserController::class],'index');
//     Route::get('users/{user}', [UserController::class],'show');
//     Route::post('users', [UserController::class],'store');
//     Route::put('users/{user}', [UserController::class],'update');
//     Route::delete('users/{user}', [UserController::class],'delete');



Route::group(['middleware' => 'auth:api'], function() {

	Route::get('users', 'Auth\UserController@index');
    Route::get('users/{user}', 'Auth\UserController@show');
    Route::post('users', 'Auth\UserController@store');
    Route::put('users/{user}', 'Auth\UserController@update');
    Route::delete('users/{user}', 'Auth\UserController@delete');


    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');



    


});


// Auth::guard('api')->user(); // instance of the logged user
// Auth::guard('api')->check(); // if a user is authenticated
// Auth::guard('api')->id(); // the id of the authenticated user


Route::middleware('auth:api')
->get('/user', function (Request $request) {
    return $request->user();
});


