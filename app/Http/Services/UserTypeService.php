<?php

namespace App\Http\Services;
use App\Models\UserType;

class UserTypeService 
{
    /**
     *  Get all user types
     *  Return $userTypes
     */
    public static function all()
    {
        $userTypes = UserType::all();

        return $userTypes;
    }

    /**
     *  Get vendor user type
     *  Return $vendor
     */
    public static function vendor()
    {
        $vendor = UserType::where('name', 'Vendor')->first();

        return $vendor;
    }

    /**
     *  Get customer userType
     *  Return $customer
     */
    public static function customer()
    {
        $customer = UserType::where('name', 'Customer')->first();

        return $customer;
    }

    /**
     *  Get internal user userType
     *  Return $internalUser
     */
    public static function internalUser()
    {
        $internalUser = UserType::where('name', 'Internal User')->first();

        return $internalUser;
    }

    /**
     *  Store new userType
     *  Return $userType
     */
    public function store(array $userTypeData)
    {
        $userType = UserType::create($userTypeData);

        return $userType;
    }

    /**
     *  Update existing userType
     *  Return $userType
     */
    public function update(array $userTypeData, UserType $userType)
    {
        $userType->update($userTypeData);

        return $userType;
    }
}