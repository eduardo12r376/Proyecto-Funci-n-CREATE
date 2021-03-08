<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWashersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('washers', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->tinyInteger('capacity');
            $table->tinyInteger('weight');
            $table->string('color', 50);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('measurements', 50);
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
        Schema::dropIfExists('washers');
    }
}
