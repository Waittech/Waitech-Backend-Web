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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_user_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->unsignedBigInteger('phone_number')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('neighborhood_name')->nullable();
            $table->string('street_name')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('owner_user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
        });

        Schema::create('company_has_users', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('company_id')
              ->references('id')
              ->on('companies')
              ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');

            $table->primary(['company_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_companies');
        Schema::dropIfExists('companies');
    }
};
