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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Hp_NTli');
            $table->string('Hp_NTlis');
            $table->string('Col_R1H3');
            $table->string('Col_R1pr');
            $table->string('Col_R1su');
            $table->string('Col_R1sp');
            $table->string('Col_R1yr');
            $table->string('Col_R2sp');
            $table->string('Col_R2H5');
            $table->string('Col_R3sp');
            $table->string('Col_R3H5');
            $table->string('Col_R4sp');
            $table->string('Col_R4H5');
            $table->string('Col_R5sp');
            $table->string('Col_R5H5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_plans');
    }
};
