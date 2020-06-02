<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutCommentMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_comments',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedBigInteger('component_id');
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('component_type');
            $table->text('review');
            $table->string('user_name');
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
        Schema::drop('checkout_comments');
    }
}
