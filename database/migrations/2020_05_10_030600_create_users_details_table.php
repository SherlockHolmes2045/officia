<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('picture')->default('pictures/default.jpg');
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->date('experience')->nullable();
            $table->char('gender')->nullable();
            $table->string('job_type')->nullable();
            $table->text('about')->nullable();
            $table->text('special_skills')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('personnal_site')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('cv')->nullable();
            $table->string('contact')->nullable();
            $table->string('facebook')->default("#");
            $table->string('twitter')->default("#");
            $table->string('github')->default('#');
            $table->string('linkedin')->default('#');
            $table->string('dribble')->default('#');
            $table->string('instagram')->default('#');
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
        Schema::dropIfExists('users_details');
    }
}
