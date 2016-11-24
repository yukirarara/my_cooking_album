<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Kc\RecipeModel;

class RecipeController extends Controller
{
    /**
     * レシピのタイトルページを表示する
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
    public function index()
    {
       


    }

    /**
     * 仮
     *
     */
    public function create()
    {
        
        //RecipeModel->addrecipe();
        return view('recipe/create');
    }
}
