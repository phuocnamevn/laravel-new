@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Permission group</h2>
    <a href="/admin/permission-group" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
      @if(!empty($permissionGroup))
      <form class="g-3 needs-validation">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Permission ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$permissionGroup->id}}" readonly>
          </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$permissionGroup->name}}" readonly>
        </div>
        </div>
      </form>
      @endif
    </div>
  </div>
    @endsection
    