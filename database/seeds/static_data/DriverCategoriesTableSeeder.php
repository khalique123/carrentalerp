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

        $path = 'public\database\seeds\static_data\data\driver_categories_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Driver Categories table seeded!');
    }
}
