<?php

namespace App\Http\Controllers;

use App\Models\EmployeePresence;
use Illuminate\Http\Request;

class EmployeePresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presences = EmployeePresence::with('employee')->get();
        return view('employees-presences.index', compact('presences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeePresence $employeePresence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeePresence $employeePresence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeePresence $employeePresence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeePresence $employeePresence)
    {
        //
    }
}
