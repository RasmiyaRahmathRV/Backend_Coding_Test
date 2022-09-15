<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OccurenceController extends Controller
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

    public function groupByOwnersService()
    {
        $arr1 = array(
            'insurance.txt' => 'Company A', 
            'letter.docx' => 'Company A',
            'Contract.docx' => 'Company B'
        );
        
        $arr2 = array();
        foreach ($arr1 as $key => $value) {
            $arr2[$value][] = $key;
        }
       

        echo"<pre>";print_r($arr2);

    }
}
