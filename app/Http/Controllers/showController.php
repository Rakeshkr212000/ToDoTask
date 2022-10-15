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

    public function completedData(){
        $datashow['data']= DB::table('data')->where('complete', 1)->get();


        return view('completed')->with("cData",$datashow);
    }

    public function completeTodo($id){
        
        DB::table('data')->where('id', $id)->update(['complete' => '1']);
        return redirect()->back()->with('message', 'Todo completed.');
        
    }

    public function deleteAll()
    {
      DB::table('data')->where('complete', 1)->delete();
      return redirect()->back()->with('message', 'Deleted Tasks');
    }
}
