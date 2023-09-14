<?php

namespace App\Http\Services;

use App\Models\Status;

class StatusService 
{
    /**
     *  Get statuses
     *  Returns $statuses or null
     */
    public function all()
    {
        $statuses = Status::all();

        return $statuses;
    }

    /**
     *  Get active status
     *  Returns $active or null
     */
    public static function active()
    {
        $active = Status::where('name', 'Active')->first();

        return $active;
    }

    /**
     *  Get inactive status
     *  Returns $inactive or null
     */
    public static function inactive()
    {
        $inactive = Status::where('name', 'Inactive')->first();

        return $inactive;
    }

    /**
     *  Store a new status.
     *  Returns the created status as $status
     */
    public function store(array $statusData)
    {
        $status = Status::create($statusData);

        return $status;
    }

    /**
     *  Update an existing status.
     *  Returns the updated status as $status
     */
    public function update(array $statusData, Status $status)
    {
        $status->update($statusData);

        return $status;
    }
}