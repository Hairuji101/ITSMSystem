<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releases', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->string('status');
            $table->datetime('planStartDate')->nullable();
            $table->datetime('planEndDate')->nullable();
            $table->string('priority');
            $table->string('type');
            $table->text('buildPlan')->nullable();

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
        Schema::dropIfExists('releases');
    }
}
