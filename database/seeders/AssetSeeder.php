<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sqlFilePath = public_path('assets/install.sql'); // Specify the path to your SQL file

        if (File::exists($sqlFilePath)) {
            $sqlStatements = File::get($sqlFilePath);
            $statements = explode(';', $sqlStatements);

            foreach ($statements as $statement) {
                if (trim($statement) != '') {
                    DB::statement($statement);
                }
            }

            $this->command->info('Data seeded successfully from install.sql');
        } else {
            $this->command->error('install.sql file not found in the assets folder.');
        }
    }
}
