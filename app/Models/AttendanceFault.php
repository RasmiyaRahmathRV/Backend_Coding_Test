<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceFault extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'attendance_id'];

    public function Employee(){
        return $this->belongsToMany(Employee::class);
    }

    public function Attendance(){
        return $this->belongsToMany(Attendance::class);
    }
}
