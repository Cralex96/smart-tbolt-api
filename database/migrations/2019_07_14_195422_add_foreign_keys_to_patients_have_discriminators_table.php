<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPatientsHaveDiscriminatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients_have_discriminators', function (Blueprint $table) {
            $table->foreign('patient_id')
                  ->references('patient_id')
                  ->on('triage_consultations');

            $table->foreign('discriminator_id')
                  ->references('id')
                  ->on('discriminators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients_have_discriminators', function (Blueprint $table) {
            $table->dropForeign('patients_have_discriminators_patient_id_foreign');
            $table->dropForeign('patients_have_discriminators_discriminator_id_foreign');
        });
    }
}
