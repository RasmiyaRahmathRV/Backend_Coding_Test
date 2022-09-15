<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'schedule_id'];

    public function Employee(){
        return $this->belongsToMany(Employee::class);
    }

    public function AttendanceSchedule(){
        return $this->belongsToMany(AttendanceSchedule::class);
    }
}
