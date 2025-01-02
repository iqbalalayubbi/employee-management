<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'phone', 'user_picture', 'password',
    ];

    protected $hidden = ['password'];

    public function presences()
    {
        return $this->hasMany(EmployeePresence::class);
    }

    public function salaries()
    {
        return $this->hasMany(EmployeeSalary::class);
    }
}
