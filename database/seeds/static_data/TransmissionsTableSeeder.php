<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class TransmissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transmissionsArray = [
            ['name' => $csvLine->get('name'), 'description' => $csvLine->get('description')],
            ['name' => $csvLine->get('name'), 'description' => $csvLine->get('description')],            
        ];
        Excel::load('data_files\important_data\TransmissionsData.csv')->each(function (Collection $csvLine) {
            $transmission  = new App\Comment(['name' => $csvLine->get('name'), 'description' => $csvLine->get('description')]);
            $transmission->save();
        });
    }
}
