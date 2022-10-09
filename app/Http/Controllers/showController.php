<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function showdata(){
        $datashow= DB::table('data')->get();


        return view('pending')->with("data",$datashow);
    }
}
