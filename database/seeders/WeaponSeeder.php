<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weapon;
use Illuminate\Support\Str;

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
            $newWeapon['slug'] = Str::slug($eachWeapon['weapon_name'], '-');
            $newWeapon->save();
        }
    }
}
