<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToTriageConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('triage_consultations', function (Blueprint $table) {
            $table->foreign('employee_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('triage_consultations', function (Blueprint $table) {
            $table->dropForeign('triage_consultations_employee_id_foreign');
            $table->dropForeign('triage_consultations_patient_id_foreign');
        });
    }
}
