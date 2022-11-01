<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouresControllers extends Controller
{
    // index
    public function index(){

        return view('template.index');
    }

    // show template coures

    public function show(){

        return view('template.coures');
    }


    // create
    public function create(Request $request){

        $request->validate([
            'couresname' => 'required|string',
        ]);

        $coures = new Coures();
        $coures->couresname = $request->input('couresname');

        $coures->save();



        return redirect()->route('showcoures')->with('success', 'Coures create Successfully.');
    }
}
