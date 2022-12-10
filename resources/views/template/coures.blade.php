@extends('template.layout')

@section('coures')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Please create coures</h1>


      </div>
      <div class="col-md-10 mx-auto col-lg-5">
<form class="p-4 p-md-5 border rounded-3 bg-light"  method="post" action="{{route('addCoures')}}">
    @csrf
    @if(session("success"))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class=" mb-3 ">

      <label for="floatingInput" class="form-label">Enter Coures Name</label>
      <input type="text" class="form-control"name="couresname" id="couresname" placeholder="coures name">
    </div>
    @error('couresname')
        <div class="my-2">
            <span class="text-danger">{{$message}}</span>
        </div>
    @enderror
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Create</button>
    </div>

  </form>


</div>

</div>
<table class="table">
    <thead>
      <tr>

        <th scope="col">ชื่อโปรเจค</th>
        <th scope="col">แก้ไข</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($coureList as $i)
      <tr>

        <td><a href="#">{{$i ->couresname}}</a></td>

        <td><button  type="button" class="btn btn-sm btn-outline-secondary">
            <a href="newitems" class="nav-link text-black">Edit Item</a>
          </button></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

  @endsection
