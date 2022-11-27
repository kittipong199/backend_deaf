@extends('template.layout')

@section('quizAswer')

<div>
    <form class="row gy-2 gx-3 align-items-center" method="post" action="{{ route('createquiz') }}" enctype="multipart/form-data">
        @csrf
        <h3>สร้างข้อสอบหลังเรียน</h3>

        <div class="col-md-12">
            <label for="inputState" class="form-label">ประเภทของคอร์ส</label>
            <select id="coure_id" name="coure_id" class="form-select">
            <option selected>เลือกประเภทของ คอร์ส</option>
                @foreach ($coureList as $i)
                <option value= {{ $i->id }}>{{ $i->couresname }}</option>
                @endforeach
            </select>
          </div>

        <div class="col-md-6 ">
          <label for="text" class="form-label">คำถามแบบ ข้อความ</label>
          <input type="text" class="form-control" id="questionText" name="questionText">
        </div>
        <div class="col-md-6">
            <label for="username" class="form-label">เพิ่มวิดีโอ</label>
          <div class="input-group">

            <input type="file" class="form-control" id="questionVideo" name="questionVideo" >
        </div>
          </div>
          <div class="col-md-5">
            <label for="username" class="form-label">คำตอบที่1(Video)</label>
          <div class="input-group">

            <input type="file" class="form-control" id="aswervideo1" name="aswervideo1" >
        </div>
          </div>

        <div class="col-md-5">
          <label for="inputCity" class="form-label">คำตอบที่1(Text)</label>
          <input type="text" class="form-control" id="aswertext1" name="aswertext1">
        </div>

        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">
                คำตอบที่ถูก
            </label>
          </div>

          <div class="col-md-5">
            <label for="username" class="form-label">คำตอบที่2(Video)</label>
          <div class="input-group">

            <input type="file" class="form-control" id="aswervideo1" name="aswervideo1" >
        </div>
          </div>

        <div class="col-md-5">
          <label for="inputCity" class="form-label">คำตอบที่2(Text)</label>
          <input type="text" class="form-control" id="aswertext2" name="aswertext2">
        </div>

        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">
                คำตอบที่ถูก
            </label>
          </div>

          <div class="col-md-5">
            <label for="username" class="form-label">คำตอบที่3(Video)</label>
          <div class="input-group">

            <input type="file" class="form-control" id="aswervideo3" name="aswervideo3" >
        </div>
          </div>

        <div class="col-md-5">
          <label for="inputCity" class="form-label">คำตอบที่3(Text)</label>
          <input type="text" class="form-control" id="aswertext3" name="aswertext3">
        </div>

        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">
                คำตอบที่ถูก
            </label>
          </div>
          <div class="col-md-5">
            <label for="username" class="form-label">คำตอบที่4(Video)</label>
          <div class="input-group">

            <input type="file" class="form-control" id="aswervideo4" name="aswervideo4" >
        </div>
          </div>

        <div class="col-md-5">
          <label for="inputCity" class="form-label">คำตอบที่4(Text)</label>
          <input type="text" class="form-control" id="aswertext4" name="aswertext4">
        </div>

        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">
                คำตอบที่ถูก
            </label>
          </div>



          <div class="col-12" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
            <button
            type="submit" class="btn btn-primary" data-toggle="collapse"
          >Submit</button>

          </div>


      </form>

    </div>






      <br>


@endsection
