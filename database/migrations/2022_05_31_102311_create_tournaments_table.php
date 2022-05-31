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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->integer('left_club_id')->nullable();
            $table->integer('right_club_id')->nullable();
            $table->integer('place_id')->nullable();
            $table->integer('referee_id')->nullable();
            $table->integer('left_club_goals')->default(0);
            $table->integer('right_club_goals')->default(0);
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
        Schema::dropIfExists('tournaments');
    }
};
