@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white rounded shadow-md">
  <h1 class="text-2xl font-bold mb-6">Edit Employee Presence</h1>
  <form action="{{ route('employees-presences.update', $presence->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-4">
          <label for="employee_id" class="block text-sm font-medium text-gray-700">Employee</label>
          <select name="employee_id" id="employee_id" class="p-3 mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
              @foreach ($employees as $employee)
                  <option value="{{ $employee->id }}" {{ $presence->employee_id == $employee->id ? 'selected' : '' }}>
                      {{ $employee->name }}
                  </option>
              @endforeach
          </select>
      </div>

      <div class="mb-4">
          <label for="check_in" class="block text-sm font-medium text-gray-700">Check In</label>
          <input type="datetime-local" name="check_in" id="check_in" value="{{ date('Y-m-d\TH:i', strtotime($presence->check_in)) }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
      </div>

      <div class="mb-4">
          <label for="check_out" class="block text-sm font-medium text-gray-700">Check Out</label>
          <input type="datetime-local" name="check_out" id="check_out" value="{{ $presence->check_out ? date('Y-m-d\TH:i', strtotime($presence->check_out)) : '' }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div class="mb-4">
          <label for="late_in" class="block text-sm font-medium text-gray-700">Late In (minutes)</label>
          <input type="number" name="late_in" id="late_in" value="{{ $presence->late_in }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div class="mb-4">
          <label for="early_out" class="block text-sm font-medium text-gray-700">Early Out (minutes)</label>
          <input type="number" name="early_out" id="early_out" value="{{ $presence->early_out }}" class="p-3 border mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </div>

      <div class="flex justify-end">
          <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
          <a href="{{ route('employees-presences.index') }}" class="ml-4 bg-gray-600 text-white px-4 py-2 rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Cancel</a>
      </div>
  </form>
</div>

@endsection