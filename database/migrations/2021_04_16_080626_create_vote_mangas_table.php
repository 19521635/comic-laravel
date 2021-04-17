<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_mangas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('manga_id');
            $table->unsignedBigInteger('like');
            $table->unsignedBigInteger('dislike');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_mangas');
    }
}
