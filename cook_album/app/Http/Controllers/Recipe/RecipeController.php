<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Kc\RecipeModel;

class RecipeController extends Controller
{
    /**
     * レシピのタイトルページ
     *
     */
    public function post()
    {
        return view('recipe/post');
    }

    /**
     * レシピ記入ページを表示する
     *
     */
    public function create()
    {
        return view('recipe/create');
    }
}
