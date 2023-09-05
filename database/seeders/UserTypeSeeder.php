<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTypeData = [
            [
                'name' => 'Vendor',
            ],

            [
                'name' => 'Customer',
            ],

            [
                'name' => 'Internal User',
            ],
        ];

        $userTypes = UserType::all();

        if(count($userTypes) < 1)
        {
            foreach($userTypeData as $userType)
            {
                UserType::create($userType);
            }
        }
    }
}
