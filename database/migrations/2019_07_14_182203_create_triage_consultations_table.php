<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriageConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triage_consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('admission_date');
            $table->text('background');
            $table->integer('employee_id');
            $table->integer('patient_id');
            $table->text('observations');
            $table->tinyInteger('triage_level');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triage_consultations');
    }
}
