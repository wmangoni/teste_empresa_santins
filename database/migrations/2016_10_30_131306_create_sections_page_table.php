<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsPageTable extends Migration
{

    public function up()
    {
        Schema::create('sections_page', function (Blueprint $table) {
            $table->increments('id');
            $table->text('description');
            $table->integer('order')->nullable();
            $table->string('box_color')->nullable();
            $table->integer('page_id')->unsigned();

            $table->foreign('page_id')->references('id')->on('pages');
        });
    }

    public function down()
    {
        Schema::drop('sections_page');
    }
}
