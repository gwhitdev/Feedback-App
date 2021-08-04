<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Live',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'status' => 'Planned',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'status' => 'In-Progress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'status' => 'Suggestion',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
