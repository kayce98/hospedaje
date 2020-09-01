<?php

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
        
        $this->call(PersonSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BedroomSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
    }
}
