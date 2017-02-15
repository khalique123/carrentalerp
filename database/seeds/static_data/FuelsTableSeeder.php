<?php

use Illuminate\Database\Seeder;

class FuelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\fuels_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Fuels table seeded!');
    }
}
