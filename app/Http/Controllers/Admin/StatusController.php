<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\StatusService;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StatusService $statusService)
    {
        $statuses = $statusService->all();

        return view('admin.status.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, StatusService $statusService)
    {
        $statusData = [
            'name' => $request->name,
        ];

        $statusService->store($statusData);

        return redirect()->route('status.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }
}
