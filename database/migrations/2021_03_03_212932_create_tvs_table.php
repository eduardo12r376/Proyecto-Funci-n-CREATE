<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->string('tipe', 100);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('munt_tipe', 50);
            $table->string('screen_resolution', 50);
            $table->string('screen_technology', 50);
            $table->string('screen_size', 50);
            $table->string('serial_number', 50);
            $table->text('description');
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
        Schema::dropIfExists('tvs');
    }
}
