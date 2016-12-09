<?php

namespace App\Http\Controllers\Recipe;

use Request;
use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipeController extends Controller
{

    /**
     * レシピタイトルページ
     *
     */
    public function post()
    {
        return view('recipe/post');
    }

    /**
     * レシピを登録する
     *
     */
    public function create()
    {
        $recipe_id = Recipe::getNewRecipeId(Request::input('recipe_name'));

        return redirect("recipe/$recipe_id/");
    }

    /**
     * レシピ編集ページ
     *
     */
    public function edit($recipe_id)
    {
        return view('recipe/edit', compact('recipe_id'));
    }
}
