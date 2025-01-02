@extends('layouts.app')
@section('content')
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Employee List</h1>
    <div class="flex gap-5 justify-between">
      <a href="{{ route('employees.create') }}" 
        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded">
       Add Employee
     </a>
     <div class="flex gap-5">
       <a href="/employees-salaries" 
         class="bg-green-500 hover:bg-green-600 text-white font-medium py-1 px-3 rounded">
        Salary Employee
      </a>
       <a href="/employees-presences" 
         class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-1 px-3 rounded">
        Presence Employee
      </a>
     </div>

    </div>
    <x-table :employees="$employees" />
  </div>
@endsection
