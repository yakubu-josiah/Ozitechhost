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
        Schema::create('nav_bars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('Nav_Logo');
            $table->string('Nav_Home');
            $table->string('Nav_Dom');
            $table->string('Nav_SSL');
            $table->string('Nav_Sit');
            $table->string('Nav_Hos');
            $table->string('Nav_Web');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nav_bars');
    }
};
