<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Recipe;

class AjaxEditController extends Controller
{
    /**
     * 投稿したレシピのIDを取得する。
     *
     */
    public function saveCatchCopy()
    {
        Recipe::saveCatchCopy(Request::input('catch_copy'), Request::input('recipe_id'));
    }

    /**
     * 投稿したレシピの材料を取得する。
     *
     */
    public function saveIngredients(Request $request, $recipe_id)
    {
        // MsIngredients::getIngredientsNames();
        Recipe::saveIngredientsName($request::input('ingredients'), $recipe_id);
    }
}
