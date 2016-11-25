<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
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
    public function create(Request $request)
    {
        $recipe_id = Recipe::getNewRecipeId($request->input('recipe_name'));

        return redirect("recipe/$recipe_id");
    }

    /**
     * レシピ編集ページ
     *
     */
    public function edit()
    {
       return view('recipe/edit');
    }
}
