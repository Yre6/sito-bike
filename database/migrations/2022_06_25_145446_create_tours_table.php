<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 300);
            $table->string('slug', 300);
            $table->smallInteger('distance');
            $table->smallInteger('altitude_delta');
            $table->string('duration', 70);
            $table->string('link_gps', 200);
            $table->text('description')->nullable;
            $table->string('map_image');
            $table->string('altimetry_image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
