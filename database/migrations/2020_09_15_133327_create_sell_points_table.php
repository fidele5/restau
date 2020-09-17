<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_points', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('salle_id');
            $table->timestamps();
        });

        Schema::table('sell_points', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('salle_id')->references('id')->on('salles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_points');
    }
}
