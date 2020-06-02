<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('tourist_area');
            $table->string('address');
            $table->string('transportation');
            $table->string('area');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('feature_image');
            $table->string('images');
            $table->tinyInteger('parking')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('tourist')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('car')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('pool')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('restaurant')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('gym')->nullable()->comment('0 for available, 1 for not');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
