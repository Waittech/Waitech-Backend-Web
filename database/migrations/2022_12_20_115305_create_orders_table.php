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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('table_id');
            $table->unsignedBigInteger('user_id');
            $table->string('note')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('cascade');

            $table->foreign('table_id')
              ->references('id')
              ->on('tables')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
        });

        Schema::create('order_has_foods', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('food_id');
            $table->integer('amount');

            $table->foreign('order_id')
              ->references('id')
              ->on('orders')
              ->onDelete('cascade');

            $table->foreign('food_id')
              ->references('id')
              ->on('foods')
              ->onDelete('cascade');

            $table->primary(['order_id', 'food_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_has_foods');
    }
};
