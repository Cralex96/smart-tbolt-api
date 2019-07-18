<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('genre_id')
                  ->references('id')
                  ->on('genres');

            $table->foreign('clinic_history_id')
                  ->references('id')
                  ->on('clinical_histories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign('patients_genre_id_foreign');
            $table->dropForeign('patients_clinic_history_id_foreign');
        });
    }
}
