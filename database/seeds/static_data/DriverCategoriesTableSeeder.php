<?php

use Illuminate\Database\Seeder;

class DriverCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = "database/seeds/static_data/data/driver_categories_seeder.sql";
        $output = shell_exec('cat '.$path);
        DB::unprepared($output);
        
        $this->command->info('Driver Categories table seeded!');
    }
}
