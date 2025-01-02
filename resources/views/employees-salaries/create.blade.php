@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-4">Add Employee Salary</h1>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('employees-salaries.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="employee_id" class="block text-sm font-medium text-gray-700">Employee</label>
            <select name="employee_id" id="employee_id" class="w-full p-3 border rounded-md mt-1">
                <option value="">Select Employee</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
            @error('employee_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="month" class="block text-sm font-medium text-gray-700">Month</label>
                <input type="number" name="month" id="month" value="{{ old('month') }}" class="w-full p-3 border rounded-md mt-1">
                @error('month')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                <input type="number" name="year" id="year" value="{{ old('year') }}" class="w-full p-3 border rounded-md mt-1">
                @error('year')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="basic_salary" class="block text-sm font-medium text-gray-700">Basic Salary</label>
                <input type="number" name="basic_salary" id="basic_salary" value="{{ old('basic_salary') }}" class="w-full p-3 border rounded-md mt-1">
                @error('basic_salary')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="bonus" class="block text-sm font-medium text-gray-700">Bonus</label>
                <input type="number" name="bonus" id="bonus" value="{{ old('bonus') }}" class="w-full p-3 border rounded-md mt-1">
                @error('bonus')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="bpjs" class="block text-sm font-medium text-gray-700">BPJS</label>
                <input type="number" name="bpjs" id="bpjs" value="{{ old('bpjs') }}" class="w-full p-3 border rounded-md mt-1">
                @error('bpjs')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="jp" class="block text-sm font-medium text-gray-700">JP</label>
                <input type="number" name="jp" id="jp" value="{{ old('jp') }}" class="w-full p-3 border rounded-md mt-1">
                @error('jp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label for="loan" class="block text-sm font-medium text-gray-700">Loan</label>
                <input type="number" name="loan" id="loan" value="{{ old('loan') }}" class="w-full p-3 border rounded-md mt-1">
                @error('loan')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="total_salary" class="block text-sm font-medium text-gray-700">Total Salary</label>
                <input type="number" name="total_salary" id="total_salary" value="{{ old('total_salary') }}" class="w-full p-3 border rounded-md mt-1">
                @error('total_salary')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>


        <div class="flex flex-col items-center gap-3">
          <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600">Save Salary</button>
          <a href="/employees-salaries" class="w-full">
            <button type="button" class="w-full bg-gray-500 text-white font-bold py-2 px-4 rounded-md hover:bg-gray-600">Back</button>
          </a>

        </div>
    </form>
</div>
@endsection
