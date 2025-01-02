@extends('layouts.app')
@section('content')
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Salary Employee List</h1>
    <x-salaries-table :salaries="$salaries" />
  </div>
@endsection