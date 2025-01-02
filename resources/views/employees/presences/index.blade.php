@extends('layouts.app')
@section('content')
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center">Presence Employee List</h1>
    <button></button>
    <x-presences-table :presences="$presences" />
  </div>
@endsection