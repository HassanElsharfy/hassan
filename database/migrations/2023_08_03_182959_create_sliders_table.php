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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('background');
            $table->text('logo');
            $table->json('main_title');
            $table->json('description');
            $table->json('maintenance_button');
            $table->string('maintenance_link');
            $table->json('materials_button');
            $table->string('materials_link');
            $table->json('question');
            $table->string('whatsapp_link');
            $table->string('tiktok_link');
            $table->string('snapcaht_link');
            $table->string('instagram_link');
            $table->string('youtube_link');
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
        Schema::dropIfExists('sliders');
    }
};