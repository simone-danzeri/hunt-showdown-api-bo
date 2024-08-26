<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Map;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapsArray = config('maps');
        foreach($mapsArray as $eachMap) {
            $newMap = new Map();
            $newMap->fill($eachMap);
            $newMap->save();
        }
    }
}
