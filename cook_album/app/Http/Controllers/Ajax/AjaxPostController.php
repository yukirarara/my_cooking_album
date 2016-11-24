<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;


class AjaxPostController extends Controller
{
    /**
     * 投稿したレシピのIDを取得する。
     *
     * @return 投稿したレシピのID
     */
    public function getPostRecipeId(Request $request)
    {
        return Recipe::getNewRecipeId($request->input('recipe_name'));
    }
}
