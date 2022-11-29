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
        Schema::table('users',function (Blueprint $table){
            $table->string('phone', 12)
                ->nullable()
                ->comment('phone number of user require oly for delivery calendar')->change();
            $table->boolean('banish')->default(0)->comment('if true user is banish of forum')->change();
            $table->boolean('status')->default(1)->comment('status of user for dealt account')->change();
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
