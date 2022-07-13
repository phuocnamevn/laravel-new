@extends('layouts.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
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
    <h2 class="float-start">Create a User </h2>
    <a href="/admin/user" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
<form class="g-3 needs-validation" method="post" action="/admin/user/create">
  @csrf
  <div class="row">
  <div class="col-md-12 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="col-md-12 mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="col-md-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="col-md-6 mb-3">
    <label for="exampleInputPassword2" class="form-label">Password confirm</label>
    <input type="password" class="form-control" name="password-confirm" id="exampleInputPassword2">
  </div>
  <div class="col-md-12 mb-3">
    <label for="add" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="add" aria-describedby="emailHelp">
  </div>
  <div class="col-md-12 mb-3">
    <label for="fb" class="form-label">Facebook link</label>
    <input type="url" class="form-control" name="fb" id="fb" aria-describedby="emailHelp" placeholder="https://example.com">
  </div>
  <div class="col-md-12 mb-3">
    <label for="ytb" class="form-label">Youtube</label>
    <input type="url" class="form-control" name="ytb" id="ytb" aria-describedby="emailHelp" placeholder="https://example.com">
  </div>
  <div class="col-md-12 mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea type="text" class="form-control" name="desc" id="desc" aria-describedby="emailHelp"></textarea>
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