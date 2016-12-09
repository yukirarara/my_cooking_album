<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Debugbar;

class Recipe extends Model
{
    // レシピ番号
    private $recipe_id;

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

    /**
     * レシピのキャッチコーピーを投稿する
     *
     * @param $user_id
     * @return 投稿したレシピのID
     */
    public static function saveCatchCopy($catch_copy, $recipe_id)
    {
        Recipe::where('id', $recipe_id)
            ->update(['catch_copy' => $catch_copy]);
    }

    /**
     * レシピの材料を投稿する
     *
     * @param $user_id
     * @return 投稿したレシピのID
     */
    public static function saveIngredientsName($ingredients_data, $recipe_id)
    {
        Recipe::where('id', $recipe_id)
            ->update(['added_ingredients_name' => $ingredients_data['ingredients_name'],
                      'quantity' => $ingredients_data['quantity']]);
    }
}