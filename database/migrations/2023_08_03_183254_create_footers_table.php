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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->longText('description');
            $table->string('link_down');
            $table->string('link_contact');
            $table->string('address');
            $table->text('image');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('link5');
            $table->string('link6');
            $table->string('link7');
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
        Schema::dropIfExists('footers');
    }
};