<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer("price")->nullable();
            $table->string("slug")->unique();
            $table->string("priority")->nullable()->index();
            $table->string('main_photo')->nullable();
            $table->string('coordinate')->nullable();
            $table->boolean('active')->index();
            $table->boolean('in_index')->index();

            //Translate fields
            $table->json('name');

            $table->json("construction_end")->nullable();
            $table->json("apartment_areas")->nullable();
            $table->json("heating_systems")->nullable();
            $table->json("building_structures")->nullable();
            $table->json("additional_information")->nullable();

            $table->json('address')->nullable();
            $table->json('description')->nullable();
            $table->json('status_text')->nullable();
            $table->string('status_color')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
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
        Schema::dropIfExists('houses');
    }
}
