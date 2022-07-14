@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row">
  {{-- @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif --}}
    <div class="col-md-12">
    <h2 class="float-start">Create a User </h2>
    <a href="/admin/user" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
<form class="g-3 needs-validation" method="post" action="{{ route('user.store') }}">
  @csrf
  <div class="row">
  <div class="col-md-12 mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    @if ($errors->has('name'))
        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
    @endif
  </div>
  <div class="col-md-12 mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    @if ($errors->has('email'))
        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="col-md-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
    @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <div class="col-md-6 mb-3">
    <label for="exampleInputPassword2" class="form-label">Password confirm</label>
    <input type="password" class="form-control" name="password-confirm" id="exampleInputPassword2">
    @if ($errors->has('password-confirm'))
        <span class="text-danger text-left">{{ $errors->first('password-confirm') }}</span>
    @endif
  </div>
  <div class="col-md-12 mb-3">
    <label for="add" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="add" aria-describedby="emailHelp">
  </div>
  <div class="col-md-12 mb-3">
    <label for="fb" class="form-label">Facebook link</label>
    <input type="url" class="form-control" name="fb" id="fb" aria-describedby="emailHelp" placeholder="https://example.com">
    @if ($errors->has('fb'))
        <span class="text-danger text-left">{{ $errors->first('fb') }}</span>
    @endif
  </div>
  <div class="col-md-12 mb-3">
    <label for="ytb" class="form-label">Youtube</label>
    <input type="url" class="form-control" name="ytb" id="ytb" aria-describedby="emailHelp" placeholder="https://example.com">
    @if ($errors->has('ytb'))
        <span class="text-danger text-left">{{ $errors->first('ytb') }}</span>
    @endif
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
    