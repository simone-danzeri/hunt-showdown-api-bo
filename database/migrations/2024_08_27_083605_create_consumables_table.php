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
            $table->string('img')->nullable();
            $table->unsignedSmallInteger('light_melee_dmg');
            $table->unsignedSmallInteger('heavy_melee_dmg');
            $table->unsignedSmallInteger('damage')->nullable();
            $table->unsignedSmallInteger('effect_radius')->nullable();
            $table->unsignedSmallInteger('effect_duration')->nullable();
            $table->unsignedSmallInteger('throw_range')->nullable();
            $table->unsignedSmallInteger('fuse_timer')->nullable();
            $table->unsignedSmallInteger('control_range')->nullable();
            $table->unsignedSmallInteger('damage_per_tick')->nullable();
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
