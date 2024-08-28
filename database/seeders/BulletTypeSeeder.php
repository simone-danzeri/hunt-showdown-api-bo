<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BulletType;

class BulletTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allBulletTypes = config('bullet_types');
        foreach($allBulletTypes as $eachBulletType) {
            $newBulletType = new BulletType();
            $newBulletType->name = $eachBulletType;
            $newBulletType->save();
        }
    }
}
