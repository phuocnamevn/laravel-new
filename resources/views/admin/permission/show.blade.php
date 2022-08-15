@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Permission group</h2>
    <a href="/admin/permission-group" class="btn btn-primary float-end">{{__('messages.back')}}</a>
</div>
    <div class="col-md-12">
      @if(!empty($permission))
      <form class="g-3 needs-validation">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Permission ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="" value="{{$permission->id}}" readonly>
          </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">{{__('messages.name')}}</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="" value="{{$permission->name}}" readonly>
        </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Key</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="" value="{{$permission->key}}" readonly>
        </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Group ID</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="" value="{{$permission->permission_group_id}}" readonly>
        </div>
        </div>
      </form>
      @endif
    </div>
  </div>
    @endsection
    