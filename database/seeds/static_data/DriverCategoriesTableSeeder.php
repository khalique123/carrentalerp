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

        $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "database/seeds/static_data/diver_categories_seeder.sql"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$temp = trim(curl_exec($ch));
curl_close($ch);
        $path = '/database/seeds/static_data/diver_categories_seeder.sql';
        DB::unprepared(file_get_contents($temp));
        $this->command->info('Driver Categories table seeded!');
    }
}
