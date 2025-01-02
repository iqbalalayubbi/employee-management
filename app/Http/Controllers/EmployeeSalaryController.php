<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = EmployeeSalary::with('employee')->get();
        return view('employees-salaries.index', compact('salaries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('employees-salaries.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer',
            'year' => 'required|integer',
            'basic_salary' => 'required|numeric',
            'bonus' => 'required|numeric',
            'bpjs' => 'required|numeric',
            'jp' => 'required|numeric',
            'loan' => 'required|numeric',
            'total_salary' => 'required|numeric',
        ]);

        EmployeeSalary::create($validated);

        return redirect()->route('employees-salaries.create')->with('success', 'Salary data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeSalary $employeeSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeSalary $id)
    {
        // dd($employeeSalary->id);
        $employeeSalary = EmployeeSalary::findOrFail($id);
        $employees = Employee::all();

        return view('employees-salaries.edit', compact('employeeSalary', 'employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi data yang dikirimkan
    $validated = $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'month' => 'required|string',
        'year' => 'required|integer',
        'basic_salary' => 'required|numeric',
        'bonus' => 'required|numeric',
        'bpjs' => 'required|numeric',
        'jp' => 'required|numeric',
        'loan' => 'required|numeric',
        'total_salary' => 'required|numeric',
    ]);

    // Mencari salary berdasarkan ID
    $salary = EmployeeSalary::findOrFail($id);

    // Update data salary dengan data baru
    $salary->update($validated);

    // Redirect setelah update
    return redirect()->route('employees-salaries.index')->with('success', 'Salary data updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employeeSalary = EmployeeSalary::findOrFail($id);
        $employeeSalary->delete();
        return redirect()->route('employees-salaries.index')->with('success', 'Salary data deleted successfully');
    }
}
