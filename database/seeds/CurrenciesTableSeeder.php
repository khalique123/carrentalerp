<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\currencies_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Currencies table seeded!');
    }
}
