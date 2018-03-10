<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    
    public function up()
    {
        if(!Schema::hasTable('posts')){
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('subtitle')->unique();
                $table->string('body');
                $table->string('author');
                $table->timestamps();
            });   
        }
    }

    public function down()
    {
        //
    }
}
