<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldierEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldier_equipment', function (Blueprint $table) {
            $table->id();

            $table->foreignId('soldier_id')
                ->constrained('soldiers')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            // Armor
            $table->foreignId('head_armor_id')->nullable()->constrained('items');
            $table->foreignId('chest_armor_id')->nullable()->constrained('items');
            $table->foreignId('gloves_armor_id')->nullable()->constrained('items');
            $table->foreignId('foot_armor_id')->nullable()->constrained('items');

            // Weapons
            $table->foreignId('left_hand_item_id')->nullable()->constrained('items');
            $table->foreignId('right_hand_item_id')->nullable()->constrained('items');
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
        Schema::dropIfExists('soldier_equipment');
    }
}
