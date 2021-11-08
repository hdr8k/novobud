<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_translates', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 2)->index();
            $table->string("name");

            $table->unsignedBigInteger('district_id');

            $table->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->unique(['lang', 'district_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district_translates');
    }
}
