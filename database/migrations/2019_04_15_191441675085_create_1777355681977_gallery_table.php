<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1777355681977GalleryTable extends Migration
{
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('route', 255);
            $table->timestamps();                      
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery');
    }
}
