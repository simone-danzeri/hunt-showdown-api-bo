<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weapon;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allWeapons = config('weapons');
        foreach($allWeapons as $eachWeapon) {
            $newWeapon = new Weapon();
            $newWeapon->fill($eachWeapon);
            $newWeapon->save();
        }
    }
}
