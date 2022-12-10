
@extends('template.layout')

@section('aswer')

<div class="row mb-2">
    <form class="row gy-2 gx-3 align-items-center" method="post" action="{{ route('creatanswer') }}"enctype="multipart/form-data">
        @csrf

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="  overflow-hidden flex-md-row ">


        <div class="col-md-12">
            <label for="inputState" class="form-label">คำถามแบบ วิดีโอ</label>
            <select id="quiz_idText" name="quiz_idText" class="form-select" >
            <option selected>เลือกคำถามแบบ วิดีโอ</option>
                @foreach ($quizList as $i)
                    @if( $i->questionVideo != null )

                            <option value= {{ $i->id }}>{{ $i->questionVideo }}</option>

                    @endif
                @endforeach
            </select>

        </div>
        <br>
        {{-- ส่วนของคำตอบ แบบ ข้อความ--}}


        <div class="col-md-0">
            <label for="inputCity" class="form-label">คำตอบที่1(Text)</label>
            <input type="text" class="form-control" id="aswertext1" name="aswertext1">
          </div>

          <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="Texttrue1" name="Texttrue1" value="t1">
            <label class="form-check-label" for="Texttrue1">
                คำตอบที่ถูก
            </label>
          </div>
        <div class="col-md-0">
          <label for="inputCity" class="form-label">คำตอบที่2(Text)</label>
          <input type="text" class="form-control" id="aswertext2" name="aswertext2">
        </div>
        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="Texttrue2" name="Texttrue2" value="t2">
            <label class="form-check-label" for="Texttrue2">
                คำตอบที่ถูก
            </label>
          </div>
        <div class="col-md-0">
          <label for="inputCity" class="form-label">คำตอบที่3(Text)</label>
          <input type="text" class="form-control" id="aswertext3" name="aswertext3">
        </div>
        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="Texttrue3" name="Texttrue3" value="t3">
            <label class="form-check-label" for="Texttrue3">
                คำตอบที่ถูก
            </label>
          </div>
        <div class="col-md-0">
          <label for="inputCity" class="form-label">คำตอบที่4(Text)</label>
          <input type="text" class="form-control" id="aswertext4" name="aswertext4">
        </div>
        <div class="col-auto form-check form-check-inline">

            <input class="form-check-input" type="radio" id="Texttrue4" name="Texttrue4" value="t4">
            <label class="form-check-label" for="Texttrue4">
                คำตอบที่ถูก
            </label>
          </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="  border rounded overflow-hidden flex-md-row ">
                <div class="col p-2 d-flex flex-column ">
                    <div class="col-md-10">
                        <label for="inputState" class="form-label">คำถามแบบ ข้อความ</label>
                        <select id="quiz_id" name="quiz_id" class="form-select" >
                        <option selected>เลือกคำถามแบบ ข้อความ</option>
                            @foreach ($quizList as $i)
                                @if( $i->questionText != null )

                                        <option value= {{ $i->id }}>{{ $i->questionText }}</option>

                                @endif
                            @endforeach
                        </select>

                    </div>
                    <br>

                    {{-- คำตอบแบบ วิดีโอ --}}

                    <div class="col-md-0">
                        <label for="username" class="form-label">คำตอบที่1(Video)</label>
                      <div class="input-group">

                        <input type="file" class="form-control" id="aswervideo1" name="aswervideo1" >
                    </div>
                      </div>

                    <div class="col-auto form-check form-check-inline">

                        <input class="form-check-input" type="radio" id="Videotrue1" name="Videotrue1" value="v1">
                        <label class="form-check-label" for="Videotrue1">
                            คำตอบที่ถูก
                        </label>
                      </div>

                      <div class="col-md-0">
                        <label for="username" class="form-label">คำตอบที่2(Video)</label>
                      <div class="input-group">

                        <input type="file" class="form-control" id="aswervideo2" name="aswervideo2" >
                    </div>
                      </div>


                    <div class="col-auto form-check form-check-inline">

                        <input class="form-check-input" type="radio" id="Videotrue2"  name="Videotrue2"value="v2">
                        <label class="form-check-label" for="Videotrue2">
                            คำตอบที่ถูก
                        </label>
                      </div>

                      <div class="col-md-0">
                        <label for="username" class="form-label">คำตอบที่3(Video)</label>
                      <div class="input-group">

                        <input type="file" class="form-control" id="aswervideo3" name="aswervideo3" >
                    </div>
                      </div>

                    <div class="col-auto form-check form-check-inline">

                        <input class="form-check-input" type="radio" id="Videotrue3"  name="Videotrue3" value="v3">
                        <label class="form-check-label" for="Videotrue3">
                            คำตอบที่ถูก
                        </label>
                      </div>
                      <div class="col-md-0">
                        <label for="username" class="form-label">คำตอบที่4(Video)</label>
                      <div class="input-group">

                        <input type="file" class="form-control" id="aswervideo4" name="aswervideo4" >
                    </div>
                      </div>


                    <div class="col-auto form-check form-check-inline">

                        <input class="form-check-input" type="radio" id="Videotrue4"  name="Videotrue4"value="v4">
                        <label class="form-check-label" for="Videotrue4">
                            คำตอบที่ถูก
                        </label>
                      </div>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-12 d-grid gap-2"  role="button" >
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>






      </form>


@endsection
