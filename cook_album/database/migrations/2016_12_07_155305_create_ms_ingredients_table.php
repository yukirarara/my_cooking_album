<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ms_ingredients')) {
            Schema::create('ms_ingredients', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name')->default('');
                $table->string('hiragana')->default('');
                $table->string('katakana')->default('');
                $table->string('english')->default('');
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
        //
    }
}
