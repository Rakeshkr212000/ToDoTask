<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class storeController extends Controller
{
    public function insert(Request $request){
        $content = $request->input('message');

        $data = array("message"=>$content);

        DB::table('data')->insert($data);

        return back()->withErrors(['note added!!']);
}
}