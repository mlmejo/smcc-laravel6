<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningOutcomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_outcome', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('competency_id');
            $table->string('description');
            $table->timestamps();

            $table->foreign('competency_id')->references('competencies.id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_outcome');
    }
}
