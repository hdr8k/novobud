<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_coordinates', function (Blueprint $table) {
            $table->id();

            $table->json('name');
            $table->string('color');
            $table->string('coordinate');
            $table->string('path');

            $table->unsignedBigInteger('layout_id');

            $table->foreign('layout_id')
                ->references('id')
                ->on('layouts')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();


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
        Schema::dropIfExists('layout_coordinates');
    }
}
