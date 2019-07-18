<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUsersHaveRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_have_roles', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_have_roles', function (Blueprint $table) {
            $table->dropForeign('users_have_roles_user_id_foreign');
            $table->dropForeign('users_have_roles_role_id_foreign');
        });
    }
}
