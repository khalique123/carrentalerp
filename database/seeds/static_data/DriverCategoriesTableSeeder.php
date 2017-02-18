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

        $path = __DIR__ . '\data\driver_categories_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Driver Categories table seeded!');
    }
}
