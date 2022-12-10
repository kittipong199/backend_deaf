<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Coures;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\UriSigner;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // ดึงข้อมูลมาจาก table coures และส่งค่าออกไปให้ dorwdown ใช้ compact
        $coureList=Coures::all();

        return view('template.content',compact('coureList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Coures $coures)
    {
        //
        // จับคู่ coures กับ content

        $content = Contents::where('coure_id',$coures->id);


        $request->validate([
            'coure_id' => '',
            'contentname' => 'required|string',
            'video' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'image' => 'image',
            'content_text' => 'required|string'


        ]);

        $file = $request->file('image');
        $file2 = $request->file('video');



        if($file && $file2== null){
            $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
            return redirect()->route('showquiz')->with('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');

                 // สำหรับ upload video
        }elseif( $file == null){
            $ext2 = $file2->extension();
            $fileName2 = date('dmYHis').'.'.$ext2;
            $path2 = public_path().'/assets/videos';

            $file2->move($path2,$fileName2);

            $content = new Contents();
            $content->coure_id = $coures->id; // get id from Pk coures table
            $content->coure_id = $request->input('coure_id');
            $content->contentname = $request->input('contentname');
            $content->video = $fileName2;
            $content->content_text = $request->input('content_text');

            $content->save();

        }else{
              // สำหรับ upload image
            $ext = $file->extension();
            $fileName = date('dmYHis').'.'.$ext;
            $path = public_path().'/assets/images';
            $file->move($path,$fileName);

             // สำหรับ upload video
            $file2 = $request->file('video');
            $ext2 = $file2->extension();
            $fileName2 = date('dmYHis').'.'.$ext2;
            $path2 = public_path().'/assets/videos';

            $file2->move($path2,$fileName2);

                /// ส่วน save ข้อมูล ลง DB
            $content = new Contents();
            $content->coure_id = $coures->id; // get id from Pk coures table
            $content->coure_id = $request->input('coure_id');
            $content->contentname = $request->input('contentname');
            $content->video = $path2.$file2;
            $content->image = $path.$file;
            $content->content_text = $request->input('content_text');
            // save data to DB
            $content->save();
        }





        return redirect()->route('showcoures')->with('success', 'content create Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
