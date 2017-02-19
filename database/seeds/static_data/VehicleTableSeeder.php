<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        factory(App\Vehicle::class)->create();
        
        $this->command->info('Vehicle table seeded!');
    }
}
