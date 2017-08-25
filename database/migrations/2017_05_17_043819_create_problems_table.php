<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('type');
            $table->string('assignee');
            $table->string('requester');
            $table->text('description')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->datetime('resolutionDate')->nullable();
            $table->text('rootCause')->nullable();
            $table->text('impact')->nullable();
            $table->text('symptoms')->nullable();
            $table->text('solutionTitle')->nullable();
            $table->text('solution')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
