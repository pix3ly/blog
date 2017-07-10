<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id')->unsigned();
            $table->date('date');
            $table->time('time');
            $table->string('title');
            $table->text('body');
        });
    }

    public function down() {
        Schema::dropIfExists('posts');
    }
}
