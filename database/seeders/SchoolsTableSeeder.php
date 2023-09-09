<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('schools')->insert([
            'title' => 'Your School Name',
            'email' => 'school@example.com',
            'phone' => '1234567890',
            'address' => '123 Main Street',
            'school_info' => 'Your school information',
            'status' => 1,
            'running_session' => '1',
            'school_currency' => 'USD',
            'currency_position' => 'before',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // You can insert more records as needed.
    }
}
