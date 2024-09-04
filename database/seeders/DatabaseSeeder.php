<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MapSeeder;
use Database\Seeders\GameModeSeeder;
use Database\Seeders\GameTraitSeeder;
use Database\Seeders\BossSeeder;
use Database\Seeders\EnemySeeder;
use Database\Seeders\BulletTypeSeeder;
use Database\Seeders\SlotSeeder;
use Database\Seeders\WeaponSeeder;
use Database\Seeders\VariantSeeder;
use Database\Seeders\CustomAmmoSeeder;
use Database\Seeders\CustomAmmoWeaponSeeder;
use Database\Seeders\ToolTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            MapSeeder::class,
            GameModeSeeder::class,
            GameTraitSeeder::class,
            BossSeeder::class,
            EnemySeeder::class,
            // Here (may) starts the relations problems
            BulletTypeSeeder::class,
            SlotSeeder::class,
            WeaponSeeder::class,
            VariantSeeder::class,
            CustomAmmoSeeder::class,
            CustomAmmoWeaponSeeder::class,
            ToolTypeSeeder::class,
        ]);
    }
}
