<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('destination_id')->unsigned();
            $table->bigInteger('tour_id')->unsigned();
            $table->foreign('destination_id')->references('id')->on('destinations')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tour_id')->references('id')->on('tours')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tour_destinations');
    }
}
