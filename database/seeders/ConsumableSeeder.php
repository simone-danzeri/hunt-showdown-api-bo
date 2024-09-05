<?php

namespace Database\Seeders;

use App\Models\Consumable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allConsumables = config('consumables');
        foreach($allConsumables as $eachConsumable) {
            $newConsumable = new Consumable();
            $newConsumable->fill($eachConsumable);
            $newConsumable->save();
        }
    }
}
