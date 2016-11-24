<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class RecipeModel extends Model
{

    protected $table = 'recipes';

    /**
     *
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * レシピを追加する
　　 * 
     * @param $user_id
     * @return $recipe_id
     */    
    public static function getNewRecipeId($recipe_name, $user_id)
    {
        $recipe = new RecipeModel;
        $recipe->recipe_name = $recipe_name;
        $recipe->user_id = $user_id;
        $recipe->save();
        
        return $recipe->id;
    }
}
