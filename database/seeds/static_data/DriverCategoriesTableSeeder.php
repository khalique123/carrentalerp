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

        $filename = "/database/seeds/static_data/diver_categories_seeder.sql";
$handle = fopen($filename, "r");
$fcontents = fread($handle, filesize($filename));
fclose($handle);
echo $fcontents;
        $path = '/database/seeds/static_data/diver_categories_seeder.sql';
        DB::unprepared(file_get_contents($fcontents));
        $this->command->info('Driver Categories table seeded!');
    }
}
