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
        Schema::create('category_article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
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
        });
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
