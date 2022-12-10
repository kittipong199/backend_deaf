<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Coures;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Console\View\Components\Alert;

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
         // จับคู่ coures กับ question
        $question = Questions::where('coure_id',$coures->id);
        // $answer = Answers::where('question_id',$question->id);
         $request->validate([
             'coure_id' => '',
             // question
             'questionText' => '',
             'questionVideo' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
             'nameQuizV'=> '',
          
         ]);

        $file = $request->file('questionVideo');
        $name = $request->input('nameQuizV');
        $quizText = $request->input('questionText');

        if($file && $name == null){
            $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
            return redirect()->route('showquiz')->with('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
        }
        elseif($file == null){
            $question = new Questions();
            $question->coure_id = $coures->id; // get id from Pk coures table
            $question->coure_id = $request->input('coure_id');
            $question->questionText = $request->input('questionText');
            $question->save();

        }else {
            $ext = $file->extension();
            $fileName = $name.date('dmYHis').'.'.$ext;
            $path2 = public_path().'/assets/quiz_video';
            $file->move($path2,$fileName);
             /// ส่วน save ข้อมูล ลง DB
           $question = new Questions();
           $question->coure_id = $coures->id; // get id from Pk coures table
           $question->coure_id = $request->input('coure_id');

            // question video
           $question->questionVideo = $fileName;
           $question->save();

        }



        //    $answer = new Answers();
        //    $answer->question_id = $question->id;
        //    $answer->question_id = $request = ('question_id');
        //    $answer->save();


             //// answer
            //  'aswervideo1' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            //  'aswertext1' => '',
            //  'aswervideo2' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            //  'aswertext2' => '',
            //  'aswervideo3' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            //  'aswertext3' => '',
            //  'aswervideo4' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            //  'aswertext4' => ''


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
