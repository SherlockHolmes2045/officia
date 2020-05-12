<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('location')->nullable();
            $table->string('picture')->nullable();
            $table->string('title')->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('size')->nullable();
            $table->string('about')->nullable();
            $table->string('contact')->nullable();
            $table->string('facebook')->default('#');
            $table->string('twitter')->default('#');
            $table->string('github')->default('#');
            $table->string('linkedin')->default('#');
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
        Schema::dropIfExists('employer_details');
    }
}
