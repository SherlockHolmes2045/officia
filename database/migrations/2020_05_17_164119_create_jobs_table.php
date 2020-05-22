<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('employer_details');
            $table->string('title');
            $table->text('description');
            $table->string('status')->default('pending');
            $table->text('duration')->nullable();
            $table->bigInteger('renumeration')->nullable();
            $table->string('cahier_charge')->nullable();
            $table->string('type')->nullable();
            $table->string('gender')->default('any');
            $table->string('experience');
            $table->text("categories")->nullable();
            $table->text('skills')->nullable();
            $table->boolean('report')->default(false);
            $table->string('candidate_id')->nullable();
            $table->date('deadline')->nullable();
            $table->string('apply_online')->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
