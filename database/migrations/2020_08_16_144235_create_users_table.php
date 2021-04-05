<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('profession')->nullable();
            $table->string('about',250)->nullable();
            $table->rememberToken();
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
