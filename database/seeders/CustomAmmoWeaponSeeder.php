<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Weapon;

class CustomAmmoWeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allEntries = config('custom_ammo_weapon');
        DB::table('custom_ammo_weapon')->insert(
            $allEntries
        );
    }
}
