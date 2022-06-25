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
            $table->smallInteger('altitude-delta');
            $table->string('duration', 70);
            $table->string('link-gps', 200);
            $table->text('description')->nullable;
            $table->string('map-image');
            $table->string('altimetry-image');

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
