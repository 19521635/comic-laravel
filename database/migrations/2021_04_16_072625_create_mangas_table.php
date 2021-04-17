<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_slug')->nullable();
            $table->string('url');
            $table->string('info')->nullable();
            $table->string('other_name')->nullable();
            $table->string('other_name_slug')->nullable();
            $table->string('thumbnail')->nullable();
            $table->boolean('is_hide_thumbnail')->default(false);
            $table->text('introduce')->nullable();
            $table->text('short_introduce')->nullable();
            $table->text('note')->nullable();
            $table->unsignedBigInteger('status')->default(1);
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('last_updated_by');
            $table->boolean('is_visible')->default(true);

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
        Schema::dropIfExists('mangas');
    }
}
