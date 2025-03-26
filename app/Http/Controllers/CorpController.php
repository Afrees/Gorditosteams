<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corp;

class CorpController extends Controller
{
    public function create() {

        return view('frm_corp');

    }

    public function store(Request $request){
        
        $corp = new Corp();
        $corp->name=$request->name;
        $corp->denomination=$request->denomination;
        $corp->phone=$request->phone;
        $corp->email=$request->email;
        $corp->save();
        return $corp;

      

    }

}
   

