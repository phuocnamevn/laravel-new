<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            PermissionGroupSeeder::class,
            PermissionSeeder::class,
            SchoolSeeder::class,
            UserSeeder::class
            // RolesPermissionSeeder::class
        ]);
    }
}
