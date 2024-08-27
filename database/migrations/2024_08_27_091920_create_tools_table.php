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
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tool_type_id')
            ->constrained()
            ->onDelete('cascade');
            $table->string('tool_name')->unique();
            $table->string('tool_img')->nullable();
            $table->unsignedSmallInteger('capacity')->default(1);
            $table->unsignedSmallInteger('light_melee_dmg');
            $table->unsignedSmallInteger('heavy_melee_dmg');
            $table->unsignedSmallInteger('damage')->nullable();
            $table->unsignedSmallInteger('effect_radius')->nullable();
            $table->unsignedSmallInteger('effect_duration')->nullable();
            $table->unsignedSmallInteger('throw_range')->nullable();
            $table->unsignedSmallInteger('fuse_timer')->nullable();
            $table->unsignedSmallInteger('effective_range')->nullable();
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
        Schema::dropIfExists('tools');
    }
};
