<?php

namespace Database\Seeders;

use App\Models\EmployeePresence;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeePresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = \App\Models\Employee::all();

        foreach ($employees as $employee) {
            EmployeePresence::create([
                'employee_id' => $employee->id,
                'check_in' => Carbon::now()->subDays(rand(0, 30))->setTime(rand(7, 9), rand(0, 59)), // Random waktu check-in dalam 30 hari terakhir
                'check_out' => Carbon::now()->subDays(rand(0, 30))->setTime(rand(16, 18), rand(0, 59)), // Random waktu check-out dalam 30 hari terakhir
                'late_in' => rand(0, 60), // Waktu keterlambatan check-in dalam menit
                'early_out' => rand(0, 30), // Waktu keluar lebih awal dalam menit
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
