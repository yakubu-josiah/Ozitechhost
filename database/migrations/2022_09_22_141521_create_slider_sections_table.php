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
        Schema::create('slider_sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           $table->text('Sld_Img');
            $table->string('Sld_H1');
            $table->string('Sld_H3');
            $table->string('Sld_Btn');
            $table->text('Sld_Imgs');
            $table->string('Sld_H1s');
            $table->string('Sld_H3s');
            $table->string('Sld_Btns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_sections');
    }
};
