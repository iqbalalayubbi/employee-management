<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeeSalary;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Mendapatkan semua data employee
         $employees = Employee::all();

         foreach ($employees as $employee) {
            EmployeeSalary::create([
                'employee_id' => $employee->id,
                'month' => Carbon::now()->month,
                'year' => Carbon::now()->year,
                'basic_salary' => 5000000,
                'bonus' => 1000000,
                'bpjs' => 300000,
                'jp' => 100000,
                'loan' => 500000,
                'total_salary' => 5000000 + 1000000 - 300000 - 100000 - 500000, 
            ]);
        }
    }
}
