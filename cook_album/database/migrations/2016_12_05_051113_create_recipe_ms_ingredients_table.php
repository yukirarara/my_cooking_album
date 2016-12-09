<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeMsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('recipe_ms_ingredients')) {
            Schema::create('recipe_ms_ingredients', function(Blueprint $table) {
                $table->increments('id');
                # TODO: resipe_idとms_ingredients_idのdefaultはとりあえず。
                $table->integer('recipe_id')->default(1);
                $table->integer('ms_ingredients_id')->default(1);
                $table->string('new_ingredients_name')->default('');
                $table->string('quantity')->default('');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('recipe_ms_ingredients');
    }
}
