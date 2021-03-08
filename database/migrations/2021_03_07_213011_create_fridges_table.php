<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fridges', function (Blueprint $table) {
            $table->id();
            $table->string('refrigerator_type', 100);
            $table->string('color', 50);
            $table->tinyInteger('doors_number');
            $table->string('functions', 100);
            $table->string('freezer_location', 100);
            $table->string('measurements', 50);
            $table->tinyInteger('weight');
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->string('voltage', 50);
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
        Schema::dropIfExists('fridges');
    }
}
