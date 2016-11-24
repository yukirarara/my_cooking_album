<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\RecipeModel;

class AjaxRecipeController extends Controller
{
    /**
     * レシピ名を投稿する
     *
     * @param  string $recipe_name
     * @return integer $recipe_id
     */
    public function post()
    {
echo '<pre>' . var_export('casdcs', true) . '</pre>';
       // $recipe_name = Input::get('recipe_name');
       // return RecipeModel::getNewRecipeId('たこのカルパッチョ', 1);
    } 
}
