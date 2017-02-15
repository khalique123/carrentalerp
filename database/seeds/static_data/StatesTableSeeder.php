<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
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
        exec("mysql -u " . $user . " -p" . $pass . " " . $db . " < states_seeder.sql");*/
        
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\states_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('States table seeded!');
    }
}
