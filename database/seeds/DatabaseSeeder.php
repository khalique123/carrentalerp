<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StaticDataSeeder::class);
        $environment = App::environment();
        
        //if condition for Development Environment Seeding
        if(0 == strcasecmp('development', $environment)) {
            
        }
        //if condition for Production Environment Seeding
        elseif(0 === strcasecmp('production', $environment)) {
            
        }
        //if condition for Test Environment Seeding
        elseif(0 === strcasecmp('testing', $environment)) {
            
        }
    }
}
