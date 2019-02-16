<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('content');
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('tag_id')->unsigned()->nullable();
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->string('cover')->nullable();
            $table->string('url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
