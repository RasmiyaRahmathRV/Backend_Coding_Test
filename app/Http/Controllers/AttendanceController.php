<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function fetch_hours()
    {
        $attendance = Attendance::selectRaw('time(SUM(hours_worked))')->groupBy('employee_id')->get();
       echo"<pre>";print_r($attendance);
    }
}
