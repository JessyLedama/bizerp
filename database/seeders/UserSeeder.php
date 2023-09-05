<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'firstName' => 'Admin',
                'lastName' => 'User',
                'email' => 'admin@email.com',
                'phone' => '0712345678',
                'identificationNumber' => '22212019',
                'kraPin' => 'hwhdhowodwidwohdwdhi',
                'typeId' => '',
                'roleId' => '',
                'statusId' => '',
                'photo' => '/public/images/user.png',
                'password' => Hash::make('password'),
            ],
        ];

        $users = User::all();

        if(empty($users))
        {
            foreach($usersData as $user)
            {
                User::create($user);
            }
        }
    }
}