<?php

namespace App\Http\Services;

use App\Models\User;
use App\Http\Services\StatusService;
use App\Http\Services\UserTypeService;
use App\Models\Status;
use App\Models\UserType;

class UserService {

    /**
     *  Create a new user.
     *  Returns $user
     */
    public function store(array $userData)
    {
        $user = User::create([
            'firstName' => $userData['firstName'],
            'lastName' => $userData['lastName'],
            'email' => $userData['email'],
            'phone' => $userData['phone'],
            'identificationNumber' => $userData['identificationNumber'],
            'password' => $userData['password'],
            'kraPin' => $userData['kraPin'],
            'typeId' => $userData['typeId'],
            'roleId' => $userData['roleId'],
            'statusId' => $userData['statusId'],
            'photo' => $userData['photo'],
        ]);

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
     *  Get all users with their statuses.
     *  Returns  $users
     */
    public function all()
    {
        $users = User::with('status')
                    ->with('userType')
                    ->get();
        
        return $users;
    }

    /**
     *  Get all (active) customers.
     *  Returns  $customers
     */
    public function customers()
    {
        $active = StatusService::active();
        $customerType = UserTypeService::customer();

        $customers = User::where('statusId', $active->id)
                        ->where('typeId', $customerType->id)
                        ->get();    

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