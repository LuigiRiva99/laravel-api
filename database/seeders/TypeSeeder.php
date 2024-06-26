<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Front-end','Back-end','Fullstack','Design'];

        foreach ($types as $type) {

            $new_type = new Type();
            $new_type->name = $type;

            $new_type->save();
        }
    }
}
