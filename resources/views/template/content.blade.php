@extends('template.layout')


@section('content')



  <form method="post" action="{{ route('createcontent') }}" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
        <div class="col-12">
            <label for="username" class="form-label">ชื่อ วิดีโอ</label>
            <div class="input-group has-validation">

              <input type="text" class="form-control" id="contentname" name="contentname" placeholder="videoname" required>

            </div>
          </div>

      <div class="col-12">
        <label for="username" class="form-label">เพิ่มวิดีโอ</label>
      <div class="input-group">

        <input type="file" class="form-control" id="video" name="video" >
    </div>
      </div>
      <div class="col-12">
        <label for="username" class="form-label">เพิ่มรูปภาพ</label>
    <div class="input-group">

    <input type="file" class="form-control" id="image" name="image" >
</div>
  </div>
      <div class="col-12">
        <label for="username" class="form-label">ความหมายของ วิดีโอ</label>
        <div class="input-group has-validation">

          <input type="text" class="form-control" id="content_text" name="content_text" placeholder="description" required>

        </div>
      </div>

  <div class="input-group">
  <button type="submit" class="btn btn-primary mb-3">Add</button>
</div>
</form>
  @endsection
