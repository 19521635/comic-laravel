<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mangas', function (Blueprint $table) {
            $table->foreign('status')->references('id')->on('manga_statuses');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('last_updated_by')->references('id')->on('users');
        });

        Schema::table('manga_statistics', function (Blueprint $table) {
            $table->foreign('manga_id')->references('id')->on('mangas');
        });

        Schema::table('chapters', function (Blueprint $table) {
            $table->foreign('manga_id')->references('id')->on('mangas');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('last_updated_by')->references('id')->on('users');
        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('manga_id')->references('id')->on('mangas');
            $table->foreign('chapter_id')->references('id')->on('chapters');
            $table->foreign('parent_id')->references('id')->on('comments');
            $table->foreign('created_by')->references('id')->on('users');
        });

        Schema::table('bookmarks', function (Blueprint $table) {
            $table->foreign('manga_id')->references('id')->on('mangas');
            $table->foreign('folder_id')->references('id')->on('bookmark_folders');
        });

        Schema::table('bookmark_folders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('translate_users', function (Blueprint $table) {
            $table->foreign('team_id')->references('id')->on('translate_teams');
            $table->foreign('role_id')->references('id')->on('translate_user_roles');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('translate_mangas', function (Blueprint $table) {
            $table->foreign('team_id')->references('id')->on('translate_teams');
            $table->foreign('manga_id')->references('id')->on('mangas');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('user_type_id')->references('id')->on('user_types');
            $table->foreign('user_status_id')->references('id')->on('user_statuses');
        });

        Schema::table('manga_authors', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('manga_id')->references('id')->on('mangas');
        });

        Schema::table('manga_categories', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('manga_id')->references('id')->on('mangas');
        });

        Schema::table('report_mangas', function (Blueprint $table) {
            $table->foreign('chapter_id')->references('id')->on('chapters');
            $table->foreign('created_by')->references('id')->on('users');
        });

        Schema::table('vote_mangas', function (Blueprint $table) {
            $table->foreign('manga_id')->references('id')->on('mangas');
        });

        Schema::table('block_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('blocked_by')->references('id')->on('users');
        });

        Schema::table('active_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
