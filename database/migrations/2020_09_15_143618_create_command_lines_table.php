<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('command_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->integer('quantity');
            $table->unsignedBigInteger('facture_id');
            $table->timestamps();
        });

        Schema::table('command_lines', function(Blueprint $table){
            $table->foreign('article_id')->references('id')->on('articles')->cascadeOnDelete();
            $table->foreign('facture_id')->references('id')->on('factures')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('command_lines');
    }
}
