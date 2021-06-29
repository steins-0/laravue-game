<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('image')->nullable();

            // Race and the class
            $table->foreignId('race_id')->constrained('races');
            $table->foreignId('class_id')->constrained('classes');

            // Level and XP
            $table->tinyInteger('level')->default(1);
            $table->tinyInteger('experience');

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
        Schema::dropIfExists('soldiers');
    }
}
