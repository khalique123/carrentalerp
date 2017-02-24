<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class TransmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = "database/seeds/static_data/data/transmissions_seeder.sql";
        $output = shell_exec('cat '.$path);
        DB::unprepared($output);
        
        $this->command->info('Transmissions table seeded!');
    }
}
