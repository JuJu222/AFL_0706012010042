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
            'fruit_name' => 'Fuji Apple',
            'price' => 44500,
            'weight' => 1,
            'image_path' => 'apple.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Cavendish Banana',
            'price' => 18900,
            'weight' => 1,
            'image_path' => 'banana.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Australian Grapes',
            'price' => 55000,
            'weight' => 0.5,
            'image_path' => 'grape.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'USA Lemon',
            'price' => 38640,
            'weight' => 0.56,
            'image_path' => 'lemon.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Wogan Orange',
            'price' => 40000,
            'weight' => 1,
            'image_path' => 'orange.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Peach',
            'price' => 45000,
            'weight' => 0.5,
            'image_path' => 'peach.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Pineapple',
            'price' => 55800,
            'weight' => 0.6,
            'image_path' => 'pineapple.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('fruits')->insert([
            'fruit_name' => 'Watermelon',
            'price' => 45000,
            'weight' => 3,
            'image_path' => 'watermelon.png',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
