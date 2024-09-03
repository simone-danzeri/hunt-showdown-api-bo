<?php

namespace Database\Seeders;

use App\Models\CustomAmmo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomAmmoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allCustomAmmos = config('custom_ammos');
        foreach($allCustomAmmos as $eachCustomAmmo) {
            $newCustomAmmo = new CustomAmmo();
            $newCustomAmmo->name = $eachCustomAmmo;
            $newCustomAmmo->save();
        }
    }
}
