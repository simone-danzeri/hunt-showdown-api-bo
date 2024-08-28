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
        Schema::create('legendary_skins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weapon_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('tool_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('consumable_id')
            ->constrained()
            ->onDelete('cascade');
            $table->foreignId('dlc_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('img')->nullable();
            $table->unsignedSmallInteger('bb_cost')->nullable();
            $table->boolean('is_reward')->default(false);
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
        Schema::dropIfExists('legendary_skins');
    }
};
