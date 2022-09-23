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
        Schema::create('brand_partners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('FPS_Img1');
            $table->text('FPS_Img2');
            $table->text('FPS_Img3');
            $table->text('FPS_Img4');
            $table->text('FPS_Img5');
            $table->text('FPS_Img6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_partners');
    }
};
