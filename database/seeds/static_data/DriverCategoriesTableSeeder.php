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

        $filename = "database/seeds/static_data/driver_categories_seeder.sql";

        $this->command->info(shell_exec('pwd'));
        $output = shell_exec('cat '.$filename);
        $path = 'database/seeds/static_data/driver_categories_seeder.sql';
        DB::unprepared($output);
        
        $this->command->info('Driver Categories table seeded!');
    }
}
