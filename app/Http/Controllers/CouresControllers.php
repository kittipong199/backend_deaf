<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class CouresControllers extends Controller
{
    /////////////////////////////////////////

    ////แสดงผลหน้าเว็บไซต์
    // index
    public function index(){

        // $contentShow= Contents::all();
        // return view('template.coures',compact('contentShow') );
        $coureList=Coures::all();
        return view('template.coures',compact('coureList'));
    }

    // show template coures

    public function show(){

        // $coureList=Coures::all();
        // return view('template.coures',compact('coureList'));
    }

////////////////////////////////////////////////////
///////////เพิ่มชื่อ คอร์ส
    // create
    public function create(Request $request){

        $request->validate([
            'couresname' => 'required|string|unique:coures|max:255',// ต้องป้อนข้อมูลมา|ต้องเป็นข้อความ|ห้ามซ้ำ
        ],
        [
            'couresname.required' => "กรุณาใส่ชื่อคอร์ส",
            'couresname.unique' => "มีข้อมูลนี้แล้ว",
            'couresname.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",
        ]
    );

        $coures = new Coures();
        $coures->couresname = $request->input('couresname');

        $coures->save();



        return redirect()->back()->with('success', 'Coures create Successfully.');
    }
}
