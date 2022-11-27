@extends('template.layout')

@section('coures')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Plase create coures</h1>

      </div>
      <div class="col-md-10 mx-auto col-lg-5">
<form class="p-4 p-md-5 border rounded-3 bg-light"  method="post" action="{{route('addCoures')}}">
    @csrf
    <div class=" mb-3 ">

      <label for="floatingInput" class="form-label">Enter Coures Name</label>
      <input type="text" class="form-control"name="couresname" id="couresname" placeholder="coures name">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Create</button>
    </div>
  </form>
</div>
</div>
</div>
  @endsection
