<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('username', 50)->unique();
        $table->string('password', 32);
        $table->string('email')->unique();
        $table->rememberToken();
        $table->timestamps();
    });
  }

  public function down()
  {
      Schema::dropIfExists('users');
  }
}
