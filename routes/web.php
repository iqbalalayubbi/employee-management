<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeePresenceController;
use App\Http\Controllers\EmployeeSalaryController;
use Illuminate\Support\Facades\Route;

Route::resource("employee", EmployeeController::class);
Route::resource("employee/presence", EmployeePresenceController::class);
Route::resource("employee/salary", EmployeeSalaryController::class);


