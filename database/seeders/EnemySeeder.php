<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Enemy;

class EnemySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enemiesArray = config('enemies');
        foreach($enemiesArray as $eachEnemy) {
            $newEnemy = new Enemy();
            $newEnemy->fill($eachEnemy);
            $newEnemy['slug'] = Str::slug($eachEnemy['enemy_name'], '-');
            $newEnemy->save();
        }
    }
}
