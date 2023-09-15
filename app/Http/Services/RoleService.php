<?php

namespace App\Http\Services;

use App\Models\Role;

class RoleService 
{
    /**
     *  Get statuses
     *  Returns $roles or null
     */
    public static function all()
    {
        $roles = Role::all();

        return $roles;
    }

    /**
     *  Get active status
     *  Returns $active or null
     */
    public static function active()
    {
        $active = Role::where('name', 'Active')->first();

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