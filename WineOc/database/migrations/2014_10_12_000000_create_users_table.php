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
            $table->boolean('login')->default(false);
            $table->string('password')->unique('password');
            $table->string('name')->unique('name');
            $table->string('email')->unique('email');
            $table->text('profile_photo_path')->nullable();
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->string('country');
            $table->string('phone');
            $table->boolean('admin')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('current_team_id')->nullable();
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
