<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->text('description');
            $table->string('status');
            $table->string('changeType');
            $table->string('impactType');
            $table->text('impactAnalysis')->nullable();
            $table->string('priority');
            $table->string('implementer')->nullable();
            $table->text('reasonChange')->nullable();
            $table->text('backoutPlan')->nullable();
            $table->text('ccbReview')->nullable();
            $table->datetime('ccbDate')->nullable();
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
        Schema::dropIfExists('changes');
    }
}
