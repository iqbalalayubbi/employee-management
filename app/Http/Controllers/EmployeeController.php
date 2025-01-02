<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:employees,email',
            'address' => 'required|string|max:100',
            'phone' => 'required|string|max:25',
            'user_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required|string|min:8',
        ]);

        if ($request->hasFile('user_picture')) {
            $imageName = time().'.'.$request->user_picture->extension();
            $request->user_picture->move(public_path('images'), $imageName);
            $validated['user_picture'] = 'images/'.$imageName;
        }

        $validated['password'] = bcrypt($validated['password']);
        Employee::create($validated);

        return redirect()->route('employees.create')->with('success', 'Employee added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:50|unique:employees,email,' . $employee->id,
            'address' => 'required|string|max:100',
            'phone' => 'required|string|max:25',
            'user_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('user_picture')) {
            if ($employee->user_picture && file_exists(public_path($employee->user_picture))) {
                unlink(public_path($employee->user_picture));
            }

            $imageName = time() . '.' . $request->user_picture->extension();
            $request->user_picture->move(public_path('images'), $imageName);
            $validated['user_picture'] = 'images/' . $imageName;
        }

        $employee->update($validated);
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}
