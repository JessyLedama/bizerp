<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusData = [
            [
                'name' => 'Active',
            ],

            [
                'name' => 'Inactive',
            ],

            [
                'name' => 'Draft',
            ],

            [
                'name' => 'Posted',
            ],
        ];

        $statuses = Status::all();

        if(count($statuses) == 0)
        {
            foreach($statusData as $status)
            {
                Status::create($status);
            }
        }
    }
}
