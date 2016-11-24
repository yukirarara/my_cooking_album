<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\Http\Requests;
use App\Models\RecipeModel;

class RecipeController extends Controller
{
    /**
     * レシピのタイトルページを表示する
     *
     */
    public function post()
    {
        return view('recipe/post', ['new_recipe_id' => 1]);
    }
 
    /**
     * レシピ記入ページを表示する
     *
     */
    public function index()
    {
       return view('recipe/index');
    }

}
