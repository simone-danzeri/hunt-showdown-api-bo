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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('variant_name')->unique();
            $table->string('variant_img')->nullable();
            $table->foreignId('weapon_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('slot_id')
            ->constrained()
            ->onDelete('cascade');
            $table->unsignedSmallInteger('damage');
            $table->unsignedTinyInteger('ammo_reserve')->nullable();
            $table->unsignedSmallInteger('bullet_speed')->nullable();
            $table->unsignedSmallInteger('sway')->nullable();
            $table->unsignedSmallInteger('effective_range')->nullable();
            $table->decimal('reload_time')->nullable();
            $table->decimal('cycle_time')->nullable();
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
        Schema::dropIfExists('variants');
    }
};
