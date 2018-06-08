<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_email');
            $table->integer('product_id')->unsigned();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.stoMany
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
