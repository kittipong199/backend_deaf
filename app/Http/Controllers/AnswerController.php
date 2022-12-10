<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Coures;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $quizList=Questions::all();
        return view('template.aswer',compact('quizList'));
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
    public function store(Request $request, Questions $question)
    {
        //
        $answer = Answers::where('question_id',$question->id);

        $request->validate([
            'quiz_id' => '',
            'quiz_idText'=> '',
            // question
            'aswertext1' => '',
            'aswertext2' => '',
            'aswertext3' => '',
            'aswertext4' => '',
            'aswervideo1' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'aswervideo2' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'aswervideo3' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'aswervideo4' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            'nameQuizV'=> '',
            'Texttrue1'=>'',
            'Texttrue2'=>'',
            'Texttrue3'=>'',
            'Texttrue4'=>'',
            'Videotrue1'=>'',
            'Videotrue2'=>'',
            'Videotrue3'=>'',
            'Videotrue4'=>''

        ]);

         //  // คำตอบ video 1
         $video1 = $request->file('aswervideo1');


         //คำตอบ video 2
         $video2 = $request->file('aswervideo2');


         //คำตอบ video 3
         $video3 = $request->file('aswervideo3');


         //คำตอบ video 4
         $video4 = $request->file('aswervideo4');


          // สำหรับ upload questionVideo
          $answerText1 = $request->input('aswertext1');
          $quiz = $request->input('quizid');
          if($quiz && $answerText1 == null){
            $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
            return redirect()->route('showquiz')->with('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
        }
        // ส่วน คำตอบแบบ ข้อความ
        elseif($video1 == null){
            $answer = new Answers();
            $answer->question_id = $question->id; // get id from Pk coures table
            $answer->question_id = $request->input('quiz_idText');
            $answer->answerText = $request->input('aswertext1');
            $answer->correct = $request->input('Texttrue1');
            if($request->Texttrue1 == 't1'){
                $answer->correct = 1;

            }
            $answer->save();
            $answer = new Answers();
            $answer->question_id = $question->id; // get id from Pk coures table
            $answer->question_id = $request->input('quiz_idText');
            $answer->answerText = $request->input('aswertext2');
            $answer->correct = $request->input('Texttrue2');
            if($request->Texttrue2 == 't2'){
                $answer->correct = 1;

            }
            $answer->save();
            $answer = new Answers();
            $answer->question_id = $question->id; // get id from Pk coures table
            $answer->question_id = $request->input('quiz_idText');
            $answer->answerText = $request->input('aswertext3');
            $answer->correct = $request->input('Texttrue3');
            if($request->Texttrue3 == 't3'){
                $answer->correct = 1;

            }
            $answer->save();
            $answer = new Answers();
            $answer->question_id = $question->id; // get id from Pk coures table
            $answer->question_id = $request->input('quiz_idText');
            $answer->answerText = $request->input('aswertext4');
            $answer->correct = $request->input('Texttrue4');
            if($request->Texttrue4 == 't4'){
                $answer->correct = 1;
            }
            $answer->save();



        }
        /// ส่วนคำตอบเป็น video upload file video
        else {

            $extanswer1 = $video1->extension();
         $answer1 = date('dmYHis').'video1'.'.'.$extanswer1;
         $pathans1 = public_path().'/assets/answer_video1';
         $video1->move($pathans1,$answer1);

             /// ส่วน save ข้อมูล ลง DB
           $answer = new Answers();
           $answer->question_id = $question->id; // get id from Pk coures table
           $answer->question_id = $request->input('quiz_id');
           $answer->correct = $request->input('Videotrue1');

           if($request->Videotrue1 == 'v1'){
               $answer->correct = 1;
           }
            // answer video
           $answer->answerVideo = $answer1;
           $answer->save();
         //// video2
         $extanswer2 = $video2->extension();
         $answer2 = date('dmYHis').'video2'.'.'.$extanswer2;
         $pathans2 = public_path().'/assets/answer_video2';
         $video2->move($pathans2,$answer2);

             /// ส่วน save ข้อมูล ลง DB
        $answer = new Answers();
        $answer->question_id = $question->id; // get id from Pk coures table
        $answer->question_id = $request->input('quiz_id');
        $answer->correct = $request->input('Videotrue2');

        if($request->Videotrue2 == 'v2'){
            $answer->correct = 1;
        }
        $answer->answerVideo = $answer2;
        $answer->save();

         /// video 3
         $extanswer3 = $video3->extension();
         $answer3 = date('dmYHis').'video3'.'.'.$extanswer3;
         $pathans3 = public_path().'/assets/answer_video3';
         $video3->move($pathans3,$answer3);

             /// ส่วน save ข้อมูล ลง DB
             $answer = new Answers();
             $answer->question_id = $question->id; // get id from Pk coures table
             $answer->question_id = $request->input('quiz_id');
             $answer->correct = $request->input('Videotrue3');

             if($request->Videotrue3 == 'v3'){
                 $answer->correct = 1;
             }
           $answer->answerVideo = $answer3;
           $answer->save();
         ///video 4
         $extanswer4 = $video4->extension();
         $answer4 = date('dmYHis').'video4'.'.'.$extanswer4;
         $pathans4 = public_path().'/assets/answer_video4';
         $video4->move($pathans4,$answer4);

             /// ส่วน save ข้อมูล ลง DB
             $answer = new Answers();
             $answer->question_id = $question->id; // get id from Pk coures table
             $answer->question_id = $request->input('quiz_id');
             $answer->correct = $request->input('Videotrue4');

           if($request->Videotrue4 == 'v4'){
               $answer->correct = 1;
           }
           $answer->answerVideo = $answer4;
           $answer->save();








    }

    return redirect()->route('showanswer')->with('success', 'question create Successfully.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(Answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(Answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answers $answers)
    {
        //
    }
}
