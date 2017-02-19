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

        $filename = "driver_categories_seeder.sql";

        $this->command->info(shell_exec('pwd'));
        $output = shell_exec('cat '.$filename);
        $path = '/database/seeds/static_data/diver_categories_seeder.sql';
        DB::unprepared(file_get_contents($output));
        
        $this->command->info('Driver Categories table seeded!');
    }
}
