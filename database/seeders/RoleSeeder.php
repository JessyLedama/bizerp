<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesData = [
            [
                'name' => 'Admin',
            ],

            [
                'name' => 'User',
            ],
        ];

        $roles = Role::all();

        if(count($roles) == 0)
        {
            foreach($rolesData as $role)
            {
                Role::create($role);
            }
        }
    }
}
