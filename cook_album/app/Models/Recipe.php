<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Recipe extends Model
{
    /**
     *
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * レシピを投稿する
　　 * 
     * @param $user_id
     * @return 投稿したレシピのID
     */    
    public static function getNewRecipeId($recipe_name)
    {
       $recipe = new Recipe;
       $recipe->recipe_name = $recipe_name;
       $recipe->save();
       
       return $recipe->id;         
    }
}
