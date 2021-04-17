<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_statistics', function (Blueprint $table) {
            $table->unsignedBigInteger('manga_id');
            $table->unsignedBigInteger('view')->default(0);
            $table->unsignedBigInteger('chapter')->default(0);
            $table->unsignedBigInteger('comment')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manga_statistics');
    }
}
