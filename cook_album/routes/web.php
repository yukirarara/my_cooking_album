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

Route::group(['prefix' => 'recipe'], function() {
    // レシピ名投稿ページ
    Route::get('post', 'RecipeController@post');
    Route::post('ajax-recipe', 'AjaxRecipeController@post');
    // レシピ編集ページ
   // Route::get('{new_recipe_id}', 'RecipeController@index');
});
