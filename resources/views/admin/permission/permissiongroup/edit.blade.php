@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Permission group</h2>
    <a href="/admin/permission-group" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
<form class="g-3 needs-validation" method="post" action="{{ route('permission-group.update', $show->id) }}">
  @method('PUT')
  @csrf
  <div class="row">
    <div class="col-md-12 mb-3">
      <label for="exampleInputEmail1" class="form-label">Permission ID</label>
      <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$show->id}}" disabled>
    </div>
  <div class="col-md-12 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$show->name}}">
    @error('name')
    <span class="text-danger text-left">{{$message}}</span>
    @enderror
  </div>
  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Save</button>
  <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
  </div>
</form>
    </div>
  </div>
    @endsection
                          