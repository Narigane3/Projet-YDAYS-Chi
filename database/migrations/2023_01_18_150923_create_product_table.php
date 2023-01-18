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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255);
            $table->string("reference", 10);
            $table->text("description")->nullable();
            $table->integer("quantity");
            $table->boolean("status");
            $table->double("priceHT");

            $table->unsignedBigInteger('tva_id')->comment('Reference to tva of product.');
            $table->foreign('tva_id')->references('id')->on('tva')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->unsignedBigInteger('category_id')->comment('Reference to category of product.');
            $table->foreign('category_id')->references('id')->on('category')
                ->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('product');
    }
};
