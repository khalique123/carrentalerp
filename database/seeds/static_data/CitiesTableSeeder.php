<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database/seeds/static_data/data/cities_seeder.sql';
        $output = shell_exec('cat '.$path);
        DB::unprepared($output);
        
        $this->command->info('Cities table seeded!');
    }
}
