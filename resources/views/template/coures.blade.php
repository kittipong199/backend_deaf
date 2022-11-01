@extends('template.layout')

@section('coures')
<form class="row g-3 d-flex p-2 flex-fill"  method="post" action="{{route('addCoures')}}">
    @csrf
    <div class="col-auto ">
      <label for="inputPassword2" class="visually-hidden">CouresName</label>
      <input type="text" class="form-control"name="couresname" id="couresname" placeholder="couresname">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Create</button>
    </div>
  </form>
  @endsection
