<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotels_id');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->string('price');
            $table->string('room_no');
            $table->string('room_environment')->comment('1 for ac, 0 for non ac');
            $table->string('room_type')->comment('1 for double, 0 for non single');
            $table->string('total_room');
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->date('check_in');
            $table->date('check_out');
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
        Schema::dropIfExists('books');
    }
}
