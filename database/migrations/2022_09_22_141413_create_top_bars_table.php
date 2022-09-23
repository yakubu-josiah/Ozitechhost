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
        Schema::create('top_bars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Cnt_Phn');
            $table->string('Cnt_Spt');
            $table->string('Cnt_Aff');
            $table->string('Cnt_Cli');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top_bars');
    }
};
