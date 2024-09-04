<?php

namespace Database\Seeders;

use App\Models\ToolType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allToolTypes = config('tool_types');
        foreach($allToolTypes as $eachToolType) {
            $newToolType = new ToolType();
            $newToolType->name = $eachToolType;
            $newToolType->save();
        }
    }
}
