@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Permission group</h2>
    <a href="/admin/permission-group" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
      @if (!empty($permissionGroupShow))
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$permissionGroupShow->id}}</td>
            <td>{{$permissionGroupShow->name}}</td>
            <td>{{$permissionGroupShow->created_at}}</td>
            <td>{{$permissionGroupShow->updated_at}}</td>
          </tr>
        </tbody>
      </table>
      @elseif(!empty($permissionGroupEdit))
      <form class="g-3 needs-validation" method="post" action="{{ route('permission-group.update', $permissionGroupEdit->id) }}">
        @method('PUT')
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="exampleInputEmail1" class="form-label">Permission ID</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$permissionGroupEdit->id}}" disabled>
          </div>
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$permissionGroupEdit->name}}">
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
      @else
      <form class="g-3 needs-validation" method="post" action="{{ route('permission-group.store') }}">
        @csrf
        <div class="row">
        <div class="col-md-12 mb-3">
          <label for="name" class="form-label">Permission Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
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
      @endif
    </div>
  </div>
    @endsection
    