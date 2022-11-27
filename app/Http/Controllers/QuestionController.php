<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Coures;
use App\Models\Questions;
use App\Models\Answers;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $coureList=Coures::all();
        return view('template.quiz_Aswer',compact('coureList'));
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
          //
         // จับคู่ coures กับ question

         $question = Questions::where('coure_id',$coures->id);

         //
         $request->validate([
             'coure_id' => '',
             'questionText' => '',
             'questionVideo' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             //// answer
             'aswervideo1' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'aswertext1' => '',
             'aswervideo2' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'aswertext2' => '',
             'aswervideo3' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'aswertext3' => '',
             'aswervideo4' => 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'aswertext4' => ''

         ]);

          // สำหรับ upload questionVideo
        $file = $request->file('questionVideo');
        $ext2 = $file->extension();
        $fileName = date('dmYHis').'.'.$ext2;
        $path2 = public_path().'/assets/quiz_video';

        $file->move($path2,$fileName);

           /// ส่วน save ข้อมูล ลง DB
           $question = new Questions();
           $question->coure_id = $coures->id; // get id from Pk coures table
           $question->coure_id = $request->input('coure_id');
           $question->questionText = $request->input('questionText');

           $question->questionVideo = $fileName;

           $question->save();


        return redirect()->route('showanswer')->with('success', 'question create Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $question)
    {
        //
    }
}
