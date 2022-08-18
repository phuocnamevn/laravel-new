@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">{{__('messages.list_role')}}</h2>
    <a href="/admin/role" class="btn btn-primary float-end">{{__('messages.back')}}</a>
</div>
  @if(Session::has('error'))
  <div class="alert alert-danger" role="alert">
      {{Session('error')}}
  </div>
  @endif
    <div class="col-md-12">
      @if (!empty($role))
      <form class="g-3 needs-validation" method="post" action="{{ route('role.update', $role->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Permission ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$role->id}}" disabled>
          </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">{{__('messages.name')}}</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="" value="{{$role->name}}">
          @error('name')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12">
          <label for="" class="form-label">Permission</label>
          @error('permission_ids')
          <p><span class="text-danger text-left">{{$message}}</span></p>
          @enderror
        </div>
        @php
          $selected = collect([]);
          if(!empty(old('permission_ids'))) {
              $selected = collect(old('permission_ids', []));
          }else if(!empty($role)) {
              $selected = $role->permissions;
          }
        @endphp
        @if(!empty($permissionGroups))
          @foreach($permissionGroups as $permissionGroup)
          <div class="container-fluid border rounded my-2 px-0 py-3 bg-white shadow-sm">
            <div class="container-fluid">
              <p class="form-label"> {{ $permissionGroup->name }} </p>
            </div>
            <hr>
            <div class="container-fluid">
            @if(!empty($permissionGroup->permissions))
              @foreach($permissionGroup->permissions as $permission)
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="permission_ids[]" id="{{ 'chkbox_'.$permissionGroup->id.'_'.$permission->id }}" value="{{ $permission->id }}"{{ ($selected->contains($permission->id)) ? ' checked' : '' }}>
                  <label class="form-check-label" for="{{ 'chkbox_'.$permissionGroup->id.'_'.$permission->id }}">{{ $permission->name }}</label>
              </div>
          @endforeach
        @endif
      </div>
    </div>
  @endforeach
@endif
        <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
        <button type="reset" class="btn btn-secondary">{{__('messages.reset')}}</button>
        </div>
        </div>
      </form>
      @else
      <form class="g-3 needs-validation" method="post" action="{{ route('role.store') }}">
        @csrf
        <div class="row">
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Role Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="">
          @error('name')
          <span class="text-danger text-left">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-12">
          <label for="" class="form-label">Permission</label>
          @error('permission_ids')
          <p><span class="text-danger text-left">{{$message}}</span></p>
          @enderror
        </div>
        @php
          $selected = collect([]);
          if(!empty(old('permission_ids'))) {
              $selected = collect(old('permission_ids', []));
          }else if(!empty($role)) {
              $selected = $role->permissions;
          }
        @endphp
        @if(!empty($permissionGroups))
          @foreach($permissionGroups as $permissionGroup)
          <div class="container-fluid border rounded my-2 px-0 py-3 bg-white shadow-sm">
            <div class="container-fluid">
              <p class="form-label"> {{ $permissionGroup->name }} </p>
            </div>
            <hr>
            <div class="container-fluid">
            @if(!empty($permissionGroup->permissions))
              @foreach($permissionGroup->permissions as $permission)
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="permission_ids[]" id="{{ 'chkbox_'.$permissionGroup->id.'_'.$permission->id }}" value="{{ $permission->id }}"{{ ($selected->contains($permission->id)) ? ' checked' : '' }}>
                  <label class="form-check-label" for="{{ 'chkbox_'.$permissionGroup->id.'_'.$permission->id }}">{{ $permission->name }}</label>
              </div>
          @endforeach
        @endif
      </div>
    </div>
  @endforeach
@endif
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
    