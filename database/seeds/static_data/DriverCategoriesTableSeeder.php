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

        $curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL, SITE_PATH . '/database/seeds/static_data/driver_categories_seeder.sql');
$xml_file = curl_exec($curl_handle);
curl_close($curl_handle);
        $path = '/database/seeds/static_data/driver_categories_seeder.sql';
        DB::unprepared($xml_file);
        
        $this->command->info('Driver Categories table seeded!');
    }
}
