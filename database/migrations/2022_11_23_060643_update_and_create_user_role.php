<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles',function (Blueprint $table){
           $table->id()->autoIncrement();
           $table->char('libelle',50)->comment('name of role');
           $table->boolean('status')->comment('status of role is active or not active');
        });
        Schema::table('users',function (Blueprint $table){
            $table->char('firstname',150)->comment('firstname of user');
            $table->char('lastname',150)->comment('Last name of user');
            $table->char('username',255)->comment('Public user name on forum');
            $table->string('phone',12);
            $table->boolean('status')->comment('status of user for dealt account');
            $table->boolean('banish')->comment('if true user is banish of forum');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
