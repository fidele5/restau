<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('article_id');
            $table->mediumInteger('prix');
            $table->unsignedBigInteger('taux_id');
            $table->unsignedBigInteger('salles_id');
            $table->timestamps();
        });

        Schema::table('tarifs', function(Blueprint $table){
            $table->foreign('article_id')->references('id')->on('articles')->cascadeOnDelete();
            $table->foreign('taux_id')->references('id')->on('tauxes')->cascadeOnDelete();
            $table->foreign('salles_id')->references('id')->on('salles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarifs');
    }
}
