<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePresenceController;
use App\Http\Controllers\EmployeeSalaryController;
use Illuminate\Support\Facades\Route;

Route::resource("employees", EmployeeController::class);
Route::resource("employees/presence", EmployeePresenceController::class);
Route::resource("employees/salary", EmployeeSalaryController::class);


