<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\DatabaseMigrations;
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
            $table->string('avatar')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->foreignId('role_id')->nullable()->constrained('roles')->onDelete('cascade');
            $table->foreignId('like_nomination_id')->nullable()->constrained('nominations')->onDelete('cascade');
            $table->foreignId('award_id')->nullable()->on('awards')->onDelete('cascade');
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
