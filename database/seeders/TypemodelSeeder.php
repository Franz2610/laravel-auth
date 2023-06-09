<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Typemodel;

class TypemodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typemodels = [
            "Html",
            "Css",
            "Bootstrap",
            "Vue",
            "Vite",
            "Js",
            "Php",
            "Laravel",
            "Sass"
        ];
        foreach ($typemodels as $typemodel) {
            $newType = new Typemodel();
            $newType->name = $typemodel;
            $newType->save();
        }
    }
}
