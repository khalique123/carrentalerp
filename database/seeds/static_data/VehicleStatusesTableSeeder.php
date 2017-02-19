<?php

use Illuminate\Database\Seeder;

class VehicleStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database/seeds/static_data/data/vehicle_statuses_seeder.sql';
        $output = shell_exec('cat '.$path);
        DB::unprepared($output);
        
        $this->command->info('Vehicle Statuses table seeded!');
    }
}
