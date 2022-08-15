@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">{{__('messages.list_permission')}}</h2>
    <a href="/admin/permission" class="btn btn-primary float-end">{{__('messages.back')}}</a>
</div>
    <div class="col-md-12">
      @if (!empty($permissionGroup))
      <form class="g-3 needs-validation" method="post" action="{{ route('permission.update', $permissionGroup->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Permission ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$permissionGroup->id}}" disabled>
          </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">{{__('messages.name')}}</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$permissionGroup->name}}">
          @error('name')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
        <button type="reset" class="btn btn-secondary">{{__('messages.reset')}}</button>
        </div>
        </div>
      </form>
      @else
      <form class="g-3 needs-validation" method="post" action="{{ route('permission.store') }}">
        @csrf
        <div class="row">
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="">
          @error('name')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Key</label>
          <input type="text" class="form-control" id="key" name="key" aria-describedby="">
          @error('key')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Group ID</label>
          <select class="form-control" name="permission_group_id">
            @foreach($permissionGroups as $permissionGroup)
            <option value="{{$permissionGroup->id}}">{{$permissionGroup->name}}</option>
            @endforeach
          </select>
          @error('permission_group_id')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
        <button type="reset" class="btn btn-secondary">{{__('messages.reset')}}</button>
        </div>
        </div>
      </form>
      @endif
    </div>
  </div>
    @endsection
    