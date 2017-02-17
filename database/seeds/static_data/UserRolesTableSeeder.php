<?php

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database\seeds\static_data\data\user_roles_seeder.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('User Statuses table seeded!');
    }
}
