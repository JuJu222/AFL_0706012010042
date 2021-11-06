<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fruits')->insert([
            'fruit_name' => 'Apple',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'apple.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Banana',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'banana.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Grape',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'grape.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Lemon',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'lemon.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Orange',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'orange.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Peach',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'peach.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Pineapple',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'pineapple.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Watermelon',
            'price' => 0,
            'weight' => 0,
            'image_path' => 'watermelon.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
