<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->id();
            $table->string("path", 255);
            $table->string("title", 150);
            $table->string("alt", 255);
            $table->integer("size");
            $table->string("mime_type", 15);
            $table->boolean("status");
            $table->timestamps();
        });
        // add value default
        DB::table('medias')->insert([
            'path' => "/medias/default.jpg",
            'title' => "default.jpg",
            'alt' => "Image par défaut quand aucune image est trouvée.",
            'size' => 2420,
            'mime_type' => "image/jpeg",
            'status' => 0,
            "created_at" => new DateTimeImmutable(),
            "updated_at" => new DateTimeImmutable()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
};
