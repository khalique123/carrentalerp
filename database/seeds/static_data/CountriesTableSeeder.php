<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // =============================================================
        // file Path -> Project/app/configs/database.php
        // get the database name, database username, database password
        // =============================================================
        $db     = \Config::get('database.connections.mysql.database');
        $user   = \Config::get('database.connections.mysql.username');
        $pass   = \Config::get('database.connections.mysql.password');

        // running command line import in php code
        exec("mysql -u " . $user . " -p" . $pass . " " . $db . " < database\seeds\static_data\data\countries_seeder.sql");*/
        
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\countries_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Countries table seeded!');
    }
}
