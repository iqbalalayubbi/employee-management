@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-6">Edit Salary</h2>

    <!-- Form untuk mengedit data salary -->
    <form action="{{ route('employees-salaries.update', $employeeSalary->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="employee_id" class="block text-sm font-medium text-gray-700">Employee</label>
            <select name="employee_id" id="employee_id" class="p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == $employeeSalary->employee_id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="month" class="block text-sm font-medium text-gray-700">Month</label>
            <input type="text" name="month" id="month" value="{{ old('month', $employeeSalary->month) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
            <input type="number" name="year" id="year" value="{{ old('year', $employeeSalary->year) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="basic_salary" class="block text-sm font-medium text-gray-700">Basic Salary</label>
            <input type="number" name="basic_salary" id="basic_salary" value="{{ old('basic_salary', $employeeSalary->basic_salary) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="bonus" class="block text-sm font-medium text-gray-700">Bonus</label>
            <input type="number" name="bonus" id="bonus" value="{{ old('bonus', $employeeSalary->bonus) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="bpjs" class="block text-sm font-medium text-gray-700">BPJS</label>
            <input type="number" name="bpjs" id="bpjs" value="{{ old('bpjs', $employeeSalary->bpjs) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="jp" class="block text-sm font-medium text-gray-700">JP</label>
            <input type="number" name="jp" id="jp" value="{{ old('jp', $employeeSalary->jp) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="loan" class="block text-sm font-medium text-gray-700">Loan</label>
            <input type="number" name="loan" id="loan" value="{{ old('loan', $employeeSalary->loan) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="mb-4">
            <label for="total_salary" class="block text-sm font-medium text-gray-700">Total Salary</label>
            <input type="number" name="total_salary" id="total_salary" value="{{ old('total_salary', $employeeSalary->total_salary) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Salary</button>
            <a href="{{ route('employees-salaries.index') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancel</a>
        </div>
    </form>
</div>
@endsection
