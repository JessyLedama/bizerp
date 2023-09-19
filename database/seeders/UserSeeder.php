<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Services\StatusService;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activeStatus = StatusService::active();

        $usersData = [
            [
                'firstName' => 'Admin',
                'lastName' => 'User',
                'email' => 'admin@gmail.com',
                'phone' => '07123456788',
                'identificationNumber' => '222120197',
                'kraPin' => 'hwhdhowodwidwohdwdhitr',
                'typeId' => '3',
                'roleId' => '1',
                'statusId' => $activeStatus->id,
                'photo' => '/public/images/user.png',
                'password' => Hash::make('password'),
            ],

            [
                'firstName' => 'Test',
                'lastName' => 'User',
                'email' => 'test@gmail.com',
                'phone' => '0712345679',
                'identificationNumber' => '22212018',
                'kraPin' => 'hdfhdfuwifwoeifwieu',
                'typeId' => '3',
                'roleId' => '2',
                'statusId' => $activeStatus->id,
                'photo' => '/public/images/user.png',
                'password' => Hash::make('password'),
            ],
        ];

        $users = User::all();

        if(count($users) == 0)
        {
            foreach($usersData as $user)
            {
                User::create($user);
            }
        }
    }
}
