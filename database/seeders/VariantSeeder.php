<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Variant;
use Illuminate\Support\Str;


class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allVariants = config('variants');
        foreach($allVariants as $eachVariant) {
            $newVariant = new Variant();
            $newVariant->fill($eachVariant);
            $newVariant['slug'] = Str::slug($eachVariant['variant_name'], '-');
            $newVariant->save();
        }
    }
}
