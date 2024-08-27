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
        Schema::create('weapons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bullet_type_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('slot_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('weapon_img')->nullable();
            $table->unsignedTinyInteger('ammo_reserve');
            $table->unsignedSmallInteger('bullet_speed');
            $table->unsignedSmallInteger('sway');
            $table->unsignedSmallInteger('effective_range');
            $table->unsignedTinyInteger('reload_time');
            $table->unsignedSmallInteger('light_melee_dmg');
            $table->unsignedSmallInteger('heavy_melee_dmg');
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
        Schema::dropIfExists('weapons');
    }
};
