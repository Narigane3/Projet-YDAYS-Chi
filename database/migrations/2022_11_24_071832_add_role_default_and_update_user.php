<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id')->default(1)
                ->comment('ref to role of user')->change();
        });
        // add value default
        DB::table('roles')->insert(['libelle' => 'User', 'status' => 1]);
        DB::table('roles')->insert(['libelle' => 'Éditeur', 'status' => 1]);
        DB::table('roles')->insert(['libelle' => 'Admin', 'status' => 1]);
        DB::table('roles')->insert(['libelle' => 'Super Admin', 'status' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn(['role_id']);
        });
    }
};
