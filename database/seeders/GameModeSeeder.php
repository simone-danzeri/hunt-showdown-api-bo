<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game_Mode;

class GameModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modesArray = config('game_modes');
        foreach($modesArray as $eachMode) {
            $newMode = new Game_Mode();
            $newMode->fill($eachMode);
            $newMode->save();
        }
    }
}
