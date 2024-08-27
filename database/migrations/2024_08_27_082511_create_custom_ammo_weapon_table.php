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
        Schema::create('custom_ammo_weapon', function (Blueprint $table) {
            $table->foreignId('custom_ammo_id')
            ->constrained()
            ->onDelete('cascade');

            $table->foreignId('weapon_id')
            ->constrained()
            ->onDelete('cascade');

            $table->primary(['custom_ammo_id', 'weapon_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_ammo_weapon');
    }
};
