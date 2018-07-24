<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('userid');
            $table->string('password');
            $table->integer('age')->nullable()->default(null);
            $table->string('sex')->nullable()->default(null);
            $table->string('favmovie')->nullable()->default(null);
            $table->string('comment')->nullable()->default(null);
            $table->string('image_url')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
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
