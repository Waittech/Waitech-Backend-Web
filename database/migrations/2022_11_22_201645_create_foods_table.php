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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('image_url')->nullable();
            $table->unsignedDecimal('sales_price', 13, 4)->nullable();
            $table->unsignedTinyInteger('vat_rate')->nullable();
            $table->unsignedTinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('cascade');
        });

      Schema::create('food_has_ingredients', function (Blueprint $table) {
        $table->unsignedBigInteger('food_id');
        $table->unsignedBigInteger('ingredient_id');

        $table->foreign('food_id')
          ->references('id')
          ->on('foods')
          ->onDelete('cascade');

        $table->foreign('ingredient_id')
          ->references('id')
          ->on('ingredients')
          ->onDelete('cascade');

        $table->primary(['food_id', 'ingredient_id']);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
        Schema::dropIfExists('food_has_ingredients');
    }
};
