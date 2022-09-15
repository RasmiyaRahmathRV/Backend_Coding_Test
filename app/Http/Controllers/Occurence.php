<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Occurence extends Controller
{
    public function index()
    {
        # code...
    }

    public function find_occurence()
    {
        $arr = array(2,3,1,2,3);

        $counts = array_count_values($arr);
        $duplicate_title  = array_filter(array_unique($arr), function ($value) use ($counts) {
            if($counts[$value] > 1):
                print($value);
            endif;
        });

    }
}
