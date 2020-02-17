<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('changetitle')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('author')->nullable();
            $table->string('author2')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('status');
            $table->unsignedInteger('category_id');
            $table->integer('view')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
