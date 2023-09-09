<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionsTableSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the 'sessions' table
        DB::table('sessions')->insert([
            'session_title' => '2023',
            'status' => 1,
            'school_id' => '1', // You can set the school_id to null or specify a value if needed
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can insert more records as needed
    }
}
