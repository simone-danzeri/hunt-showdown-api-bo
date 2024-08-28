<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slot;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allSlots = config('slots');
        foreach($allSlots as $eachSlot) {
            $newSlot = new Slot();
            $newSlot->slot_name = $eachSlot;
            $newSlot->save();
        }
    }
}
