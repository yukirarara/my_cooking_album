<?php

namespace App;

use Illuminate\Database\Eloquent\Modeli as Model;

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
     * レシピを追加する
　　 * 
     * @param $user_id
     * @return $recipe_id
     */    
    public function addRecipe(string $recipe_name, integer $user_id)
    {
       $this->user_id = $user_id;
       $this->recipe_name = $recipe_name;
       $this->save();       
    }
}
