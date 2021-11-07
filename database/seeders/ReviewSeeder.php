<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'name' => 'Titianus Gilbert',
            'score' => 4,
            'body' => 'The apple is good and at a good price as well but the service is subpar.',
            'fruit_id' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Simeon Etelvina',
            'score' => 5,
            'body' => 'High quality cavendish banana, very fresh and at a good price.',
            'fruit_id' => 2,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Dzvonimir Ezer',
            'score' => 5,
            'body' => 'One of the best grapes I\'ve ever tasted!',
            'fruit_id' => 3,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Suzan Sedef',
            'score' => 4,
            'body' => 'The lemon is really fresh and tasty. The yellow collor is amazing!',
            'fruit_id' => 4,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Hanne Lina',
            'score' => 4,
            'body' => 'Very good Wogan Orange, hard to find this item at a decent price.',
            'fruit_id' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Alba Ragnhildur',
            'score' => 3,
            'body' => 'Good quality peach but I\'ve seen better quality elsewhere.',
            'fruit_id' => 6,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Kingston Tobias',
            'score' => 5,
            'body' => 'The pineapple is fresh and at a decent price!',
            'fruit_id' => 7,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('reviews')->insert([
            'name' => 'Thamarai Abdulla',
            'score' => 4,
            'body' => 'The watermelon is fresh but the size is not that big.',
            'fruit_id' => 8,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
