<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePresence extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'check_in', 'check_out', 'late_in', 'early_out'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
