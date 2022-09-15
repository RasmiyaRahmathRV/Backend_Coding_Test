<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'shift_id', 'location_id'];

    public function Employee(){
        return $this->belongsToMany(Employee::class);
    }

    public function AttendanceShift(){
        return $this->belongsToMany(AttendanceShift::class);
    }

    public function Location(){
        return $this->belongsToMany(Location::class);
    }
}
