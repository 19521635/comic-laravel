<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translate_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_slug')->nullable();
            $table->string('url');
            $table->string('avatar');
            $table->text('description');
            $table->boolean('is_visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translate_teams');
    }
}
