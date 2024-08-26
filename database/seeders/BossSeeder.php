<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Boss;

class BossSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bossesArray = config('bosses');
        foreach($bossesArray as $eachBoss) {
            $newBoss = new Boss();
            $newBoss->fill($eachBoss);
            $newBoss['slug'] = Str::slug($eachBoss['boss_name'], '-');
            $newBoss->save();
        }
    }
}
