<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use App\Http\Services\RoleService;
use App\Http\Services\UserTypeService;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserService $userService)
    {
        $users = $userService->all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = RoleService::all();
        $types = UserTypeService::all();

        return view('admin.users.create', compact('roles', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, UserService $userService)
    {
        // get user photo
        $photo = $request->file('photo')->store('users', ['disk' => 'public']);

        $userData = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'identificationNumber' => $request->identificationNumber,
            'password' => Hash::make($request->password),
            'kraPin' => $request->kraPin,
            'typeId' => $request->typeId,
            'roleId' => $request->roleId,
            'status' => '1',
            'photo' => $photo,
        ];

        $userService->store($userData);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
