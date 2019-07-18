<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToTriageConsultationsWithVitalSignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('triage_consultations_with_vital_signs', function (Blueprint $table) {
            $table->foreign('triage_consultation_id')
                  ->references('id')
                  ->on('triage_consultations');

            $table->foreign('vital_sign_id')
                  ->references('id')
                  ->on('vital_signs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('triage_consultations_with_vital_signs', function (Blueprint $table) {
            $table->dropForeign('triage_consultations_with_vital_signs_triage_consultation_id_foreign');
            $table->dropForeign('triage_consultations_with_vital_signs_vital_sign_id_foreign');
        });
    }
}
