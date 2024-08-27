<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('consumable_type_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('name')->unique();
            $table->striing('img')->nullable();
            $table->unsignedSmallInteger('light_melee_dmg');
            $table->unsignedSmallInteger('heavy_melee_dmg');
            $table->unsignedSmallInteger('damage');
            $table->unsignedSmallInteger('effect_radius');
            $table->unsignedSmallInteger('effect_duration');
            $table->unsignedSmallInteger('throw_range');
            $table->unsignedSmallInteger('fuse_timer');
            $table->unsignedSmallInteger('control_range');
            $table->unsignedSmallInteger('damage_per_tick');
            $table->unsignedSmallInteger('cost');
            $table->text('summary')->nullable();
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
        Schema::dropIfExists('consumables');
    }
};
