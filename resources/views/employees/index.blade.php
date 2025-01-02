@extends('layouts.app')
@section('content')
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Employee List</h1>
    <a href="{{ route('employees.create') }}" 
      class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-1 px-3 rounded">
     Add Employee
   </a>
    <x-table :employees="$employees" />
  </div>
@endsection
