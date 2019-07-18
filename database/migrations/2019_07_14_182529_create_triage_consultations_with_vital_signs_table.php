<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriageConsultationsWithVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triage_consultations_with_vital_signs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('triage_consultation_id');
            $table->integer('vital_sign_id');
            $table->double('measurement', 4, 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('triage_consultations_with_vital_signs');
    }
}
