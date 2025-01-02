@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Salary</h2>

    <!-- Form untuk mengedit data salary -->
    <form method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="employee_id" class="form-label">Employee</label>
            <select name="employee_id" class="form-control" required>
                @foreach($employees as $employee)
                    <option value="{{ $employee->id }}" 
                        {{ $employee->id == $employeeSalary->employee_id ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" name="month" class="form-control" value="{{ old('month', $employeeSalary->month) }}" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" class="form-control" value="{{ old('year', $employeeSalary->year) }}" required>
        </div>

        <div class="mb-3">
            <label for="basic_salary" class="form-label">Basic Salary</label>
            <input type="number" name="basic_salary" class="form-control" value="{{ old('basic_salary', $employeeSalary->basic_salary) }}" required>
        </div>

        <div class="mb-3">
            <label for="bonus" class="form-label">Bonus</label>
            <input type="number" name="bonus" class="form-control" value="{{ old('bonus', $employeeSalary->bonus) }}" required>
        </div>

        <div class="mb-3">
            <label for="bpjs" class="form-label">BPJS</label>
            <input type="number" name="bpjs" class="form-control" value="{{ old('bpjs', $employeeSalary->bpjs) }}" required>
        </div>

        <div class="mb-3">
            <label for="jp" class="form-label">JP</label>
            <input type="number" name="jp" class="form-control" value="{{ old('jp', $employeeSalary->jp) }}" required>
        </div>

        <div class="mb-3">
            <label for="loan" class="form-label">Loan</label>
            <input type="number" name="loan" class="form-control" value="{{ old('loan', $employeeSalary->loan) }}" required>
        </div>

        <div class="mb-3">
            <label for="total_salary" class="form-label">Total Salary</label>
            <input type="number" name="total_salary" class="form-control" value="{{ old('total_salary', $employeeSalary->total_salary) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Salary</button>
    </form>
</div>
@endsection
