<?php

use Illuminate\Database\Seeder;

class PricingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\pricing_types_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Pricing Types table seeded!');
    }
}
