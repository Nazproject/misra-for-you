<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horoscopes')->insert([
            'title' => Str::random(50),
            'description' => Str::random(500),
            'category' => Str::random(),
        ]);
    }
}

