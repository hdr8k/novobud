<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_translates', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 2)->index();

            $table->string("construction_end");
            $table->string("description");
            $table->string("apartment_areas");
            $table->string("heating_systems");
            $table->string("building_structures");
            $table->string("additional_information");

            $table->unsignedBigInteger('house_id');

            $table->foreign('house_id')
                ->references('id')
                ->on('houses')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->unique(['lang', 'house_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_translates');
    }
}
