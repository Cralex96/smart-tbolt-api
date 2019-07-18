<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToDiscriminatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('discriminators', function (Blueprint $table) {
            $table->foreign('type_id')
                  ->references('id')
                  ->on('discriminators_types');

            $table->foreign('presentation_id')
                  ->references('id')
                  ->on('presentations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('discriminators', function (Blueprint $table) {
            $table->dropForeign('discriminators_type_id_foreign');
            $table->dropForeign('discriminators_presentation_id_foreign');
        });
    }
}
