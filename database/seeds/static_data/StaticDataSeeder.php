<?php

use Illuminate\Database\Seeder;

class StaticDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //can be independently seeded
        $this->call(DriverCategoriesTableSeeder::class);
        //can be independently seeded
        $this->call(FuelsTableSeeder::class);
        //can be independently seeded
        $this->call(PricingTypesTableSeeder::class);
        //can be independently seeded
        $this->call(RolesTableSeeder::class);
        //can be independently seeded
        $this->call(VehicleClassesTableSeeder::class);
        //can be independently seeded
        $this->call(VehicleStatusesTableSeeder::class);
        //can be independently seeded
        $this->call(AvailabilitiesTableSeeder::class);
        //can be independently seeded
        $this->call(CountriesTableSeeder::class);
        //can be seeder independently
        $this->call(UserStatusesTableSeeder::class);
        //to be seeded only after countries table has been seeded due to foreign key dependency
        $this->call(StatesTableSeeder::class);
        //to be seeded only after states table has been seeded due to foreign key dependency
        $this->call(CitiesTableSeeder::class);       
        //to be seeded only after countries table has been seeded due to foreign key dependency
        $this->call(CurrenciesTableSeeder::class);
        //Seed the Vehicle table
        $this->call(VehicleTableSeeder::class);
    }
}
