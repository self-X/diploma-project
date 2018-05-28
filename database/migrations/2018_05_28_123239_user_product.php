<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_product', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->primary(['user_id','product_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_product');
    }
}
