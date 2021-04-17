<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_type_id')->default(2);
            $table->string('username');
            $table->string('password');
            $table->string('display_name');
            $table->text('profile_photo_path')->nullable();
            $table->tinyInteger('gender')->default(1);
            $table->timestamp('birth_date')->nullalbe(); 
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('user_status_id')->default(1);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            
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
