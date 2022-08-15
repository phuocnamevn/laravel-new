@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
    <div class="col-md-12">
    <h2 class="float-start">List User</h2>
    <span class="float-end">
    <a href="/admin/user/form-send-mail" class="btn btn-primary">Send Mail</a>
    <a href="/admin/user/create" class="btn btn-primary">Create+</a>
    </span>
    </div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Avatar</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if ($users)
          @foreach ($users as $key => $value)
              <tr>
                <td><img width="30px" src="https://i.imgur.com/s6l2a1U.png"></td>
                <td>{{$value['name']}}</td>
                <td>{{$value['email']}}</td>
                <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
              </tr>
          @endforeach
      @endif
    </tbody>
  </table>
  <div class="col-md-12 text-center">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link"><</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">></a>
      </li>
    </ul>
  </div>
</div>
@endsection
