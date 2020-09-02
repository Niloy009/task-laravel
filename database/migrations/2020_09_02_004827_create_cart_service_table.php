<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_service', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cart_service');
    }
}
