<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
  public function up()
  {
    Schema::create('blog_posts', function (Blueprint $table){
        $table->increments('id');
        $table->Integer('user_id', false, true);
        $table->foreign('user_id')->references('id')->on('users');
        $table->string('title')->unique();
        $table->text('content');
        $table->string('image_url');
        $table->Integer('is_private',false,true)->length(1);
        $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('blog_posts');
  }
}
