<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotels_id')->unsigned()->nullable();
            $table->foreign('hotels_id')
                ->references('id')->on('hotels')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedInteger('single_ac')->nullable();
            $table->unsignedInteger('single_non_ac')->nullable();
            $table->unsignedBigInteger('single_ac_cost')->nullable();
            $table->unsignedBigInteger('single_non_ac_cost')->nullable();
            $table->unsignedInteger('double_ac')->nullable();
            $table->unsignedBigInteger('double_ac_cost')->nullable();
            $table->unsignedInteger('double_non_ac')->nullable();
            $table->unsignedBigInteger('double_non_ac_cost')->nullable();
            $table->unsignedBigInteger('discount')->default(0);
            $table->tinyInteger('availability')->nullable()->comment('0 for available, 1 for book');
            $table->tinyInteger('internet')->nullable()->comment('0 for available, 1 for not');
            $table->tinyInteger('tv')->nullable()->comment('0 for available, 1 for not');
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
        Schema::dropIfExists('rooms');
    }
}
