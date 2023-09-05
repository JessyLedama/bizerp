<?php

namespace App\Http\Services;

use App\Models\User;
use App\Https\Services\StatusService;
use App\Https\Services\UserTypeService;
use App\Models\Status;
use App\Models\UserType;

class UserService {

    /**
     *  Create a new user.
     *  Returns $user
     */
    public function store(array $userData)
    {
        $user = User::create($userData);

        return $user;
    }

    /**
     *  Update existing user.
     *  Returns $user
     */
    public function update(array $userData, User $user)
    {
        $user->update($userData);

        return $user;
    }

    /**
     *  Get all (active) users.
     *  Returns  $users
     */
    public function all(StatusService $statusService)
    {
        $active = $statusService->active();

        $users = User::where('statusId', $active->id)->get();

        return $users;
    }

    /**
     *  Get all (active) customers.
     *  Returns  $customers
     */
    public function customers(StatusService $statusService, UserTypeService $userTypeService)
    {
        $active = $statusService->active();
        $customerType = $userTypeService->customer();

        $customers = User::where('statusId', $active->id)->where('typeId', $customerType->id)->get();

        return $customers;
    }

    /**
     *  Get all (active) vendors.
     *  Returns  $vendors
     */
    public function vendors()
    {
        $active = Status::where('name', 'Active')->first();
        $vendorType = UserType::where('name', 'Vendor')->first();

        $vendors = User::where('statusId', $active->id)->where('typeId', $vendorType->id)->get();

        return $vendors;
    }

    /**
     *  Get all (active) internal users.
     *  Returns  $internalUsers
     */
    public function internalUsers(StatusService $statusService, UserTypeService $userTypeService)
    {
        $active = $statusService->active();
        $internalUserType = $userTypeService->insternalUser();

        $internalUsers = User::where('statusId', $active->id)->where('typeId', $internalUserType->id)->get();

        return $internalUsers;
    }
}