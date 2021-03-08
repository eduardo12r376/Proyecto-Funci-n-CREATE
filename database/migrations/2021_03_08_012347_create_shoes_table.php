<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('color', 50);
            $table->string('size_number', 20);
            $table->string('exterior', 50);
            $table->string('inside', 50);
            $table->string('gender', 50);
            $table->string('sole', 50);
            $table->string('model', 50);
            $table->string('brand', 100);
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
        Schema::dropIfExists('shoes');
    }
}
