<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('food_id');

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('cascade');

            $table->foreign('category_id')
              ->references('id')
              ->on('categories')
              ->onDelete('cascade');

            $table->foreign('food_id')
              ->references('id')
              ->on('foods')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
