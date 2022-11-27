
@extends('template.layout')

@section('aswer')

<div id="collapseExample">
    <form class="row gy-2 gx-3 align-items-center" method="post" action="{{ route('createquiz') }}"enctype="multipart/form-data">
        @csrf

        {{-- ส่วนของคำตอบ --}}

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


      </form>
      <br>
      <p>
        <a class="btn btn-primary" data-toggle="collapse"  role="button" aria-expanded="false" aria-controls="collapseExample">
          Link with href
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          Button with data-target
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
        </div>
      </div>

@endsection
