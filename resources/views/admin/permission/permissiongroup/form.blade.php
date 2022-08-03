@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
    <div class="col-md-12">
    <h2 class="float-start">Permission group</h2>
    <a href="/admin/permission-group" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
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
            <td>{{$show->id}}</td>
            <td>{{$show->name}}</td>
            <td>{{$show->created_at}}</td>
            <td>{{$show->updated_at}}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
    @endsection
    