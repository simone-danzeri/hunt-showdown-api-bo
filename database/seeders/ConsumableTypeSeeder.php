<?php

namespace Database\Seeders;

use App\Models\ConsumableType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allConsumableTypes = config('consumable_types');
        foreach($allConsumableTypes as $eachConsumableType) {
            $newConsumableType = new ConsumableType();
            $newConsumableType->name = $eachConsumableType;
            $newConsumableType->save();
        }
    }
}
