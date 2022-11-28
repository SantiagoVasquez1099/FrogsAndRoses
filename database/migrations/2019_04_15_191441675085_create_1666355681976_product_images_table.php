<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1666355681976ProductImagesTable extends Migration
{
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('route', 255);
            $table->unsignedInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');    
            $table->timestamps();                    
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
