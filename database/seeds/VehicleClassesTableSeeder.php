<?php

use Illuminate\Database\Seeder;

class VehicleClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\vehicle_classes_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Vehicle Classes table seeded!');
    }
}
