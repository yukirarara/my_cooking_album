<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index/index');
});

Route::group(['namespace' => 'Recipe'], function() {
    Route::get('recipe/post', 'RecipeController@post');
    Route::get('recipe/{id}', 'RecipeController@create');
});

Route::group(['namespace' => 'Ajax'], function () {
    Route::post('/post/getPostRecipeId', 'AjaxPostController@getPostRecipeId');
});
