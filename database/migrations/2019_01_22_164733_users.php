<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function(Blueprint $table){
            $table->increments('id');
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
            $table->string('password');
            $table->string('avatar')->default('http://s3.amazonaws.com/37assets/svn/765-default-avatar.png');
            $table->string('status')->default('active');
            $table->integer('roleId')->unsigned();
            $table->foreign('roleId')->references('id')->on('roles')->onDelete('CASCADE');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
