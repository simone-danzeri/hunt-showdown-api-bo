<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\GameTrait;

class GameTraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allTraits = config('traits');
        foreach($allTraits as $eachTrait) {
            $newTrait = new GameTrait();
            $newTrait->fill($eachTrait);
            $newTrait['slug'] = Str::slug($eachTrait['trait_name'], '-');
            $newTrait->save();
        }
    }
}
