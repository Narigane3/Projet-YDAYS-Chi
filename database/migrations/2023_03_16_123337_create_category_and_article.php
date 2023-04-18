<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
            $table->boolean("status")->default(1);
        });

        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content');
            $table->unsignedBigInteger('category_article_id')->comment('ref to category of article');
            $table->foreign('category_article_id')
                ->references('id')
                ->on('category_article')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
            $table->boolean("status")->default(1);
        });

        DB::table('category_article')->insert(['name' => 'Symptômes menstruels',
            'created_at' => "2023-01-01 00:00:00",
            'updated_at' => "2023-01-01 00:00:00",
            'status' => 1]);
        DB::table('category_article')->insert(['name' => 'Les protections',
            'created_at' => "2023-01-01 00:00:00",
            'updated_at' => "2023-01-01 00:00:00",
            'status' => 1]);
        DB::table('category_article')->insert(['name' => 'Vivre avec ses règles',
            'created_at' => "2023-01-01 00:00:00",
            'updated_at' => "2023-01-01 00:00:00",
            'status' => 1]);


        DB::table('article')->insert(['name' => 'Gbfviebubhbvqjfebvaevuoêhp.',
            'content' => "hbevberyvbe ththjetj eqtjeqthrqhbetj etbtejtrjstjyrz tejenrtsbgiyute gvreguiegbvitebvi",
            "category_article_id" => 1,
            'created_at' => "2023-01-01 00:00:00",
            'updated_at' => "2023-01-01 00:00:00",
            'status' => 1]);
        DB::table('article')->insert(['name' => 'IHOhuveqroiveruvpreluvhqe.',
            'content' => "hbevberyvbe ththjetj eqtjeqthrqhbetj etbtejtrjstjyrz tejenrtsbgiyute gvreguiegbvitebvi",
            "category_article_id" => 2,
            'created_at' => "2023-01-18 00:00:00",
            'updated_at' => "2023-01-18 00:00:00",
            'status' => 1]);
        DB::table('article')->insert(['name' => 'Pcnjqzrevburqbvmjhidb.',
            'content' => "hbevberyvbe ththjetj eqtjeqthrqhbetj etbtejtrjstjyrz tejenrtsbgiyute gvreguiegbvitebvi",
            "category_article_id" => 3,
            'created_at' => "2023-03-18 00:00:00",
            'updated_at' => "2023-03-18 00:00:00",
            'status' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_article');
        Schema::dropIfExists('article');
    }
};
