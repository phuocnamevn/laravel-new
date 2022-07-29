<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Database\Factories\RolesPermissionFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::factory()->count(1)->create();
    }
}
