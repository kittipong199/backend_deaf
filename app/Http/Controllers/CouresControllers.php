<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouresControllers extends Controller
{
    /////////////////////////////////////////

    ////แสดงผลหน้าเว็บไซต์
    // index
    public function index(){

        return view('template.index');
    }

    // show template coures

    public function show(){

        return view('template.coures');
    }

////////////////////////////////////////////////////
///////////เพิ่มชื่อ คอร์ส
    // create
    public function create(Request $request){

        $request->validate([
            'couresname' => 'required|string|unique:coures',// ต้องป้อนข้อมูลมา|ต้องเป็นข้อความ|ห้ามซ้ำ
        ]);

        $coures = new Coures();
        $coures->couresname = $request->input('couresname');

        $coures->save();



        return redirect()->route('showcoures')->with('success', 'Coures create Successfully.');
    }
}
