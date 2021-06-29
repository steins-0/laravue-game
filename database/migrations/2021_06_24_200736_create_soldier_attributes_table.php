<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldierAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldier_attributes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('soldier_id')
                ->constrained('soldiers')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            // Attributes
            $table->tinyInteger('movement');
            $table->tinyInteger('dexterity');
            $table->tinyInteger('health');
            $table->tinyInteger('mana');
            $table->tinyInteger('stamina');
            $table->tinyInteger('willpower');

            // Damage Resistance
            $table->tinyInteger('damage_resistance');
            $table->tinyInteger('fire_resistance');
            $table->tinyInteger('cold_resistance');
            $table->tinyInteger('poison_resistance');
            $table->tinyInteger('electricity_resistance');

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
        Schema::dropIfExists('soldier_attributes');
    }
}
