<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
        $employees = Employee::all();
        return view('employees-presences.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'check_in' => 'required|date',
            'check_out' => 'nullable|date',
            'late_in' => 'nullable|integer',
            'early_out' => 'nullable|integer',
        ]);

        EmployeePresence::create($validatedData);

        return redirect()->route("employees-presences.create")->with('success', 'Presence added successfully!');
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
    public function edit(string $id)
    {
        $presence = EmployeePresence::findOrFail($id);
        $employees = Employee::all();
        return view('employees-presences.edit', compact('presence', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'check_in' => 'required|date',
            'check_out' => 'nullable|date',
            'late_in' => 'nullable|integer',
            'early_out' => 'nullable|integer',
        ]);

        $presence = EmployeePresence::findOrFail($id);
        $presence->update($validatedData);
        return redirect()->route('employees-presences.index')->with('success', 'Presence updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $presence = EmployeePresence::findOrFail($id);
        $presence->delete();
        return redirect()->route('employees-presences.index')->with('success', 'Presence deleted successfully!');
    }
}
