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
    <h2 class="float-start">Create a Product </h2>
    <a href="/admin/product" class="btn btn-primary float-end">Back</a>
</div>
    <div class="col-md-12">
<form class="g-3 needs-validation" method="post" action="{{ route('product.store') }}">
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
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp">
    @if ($errors->has('image'))
        <span class="text-danger text-left">{{ $errors->first('image') }}</span>
    @endif
  </div>
  <div class="col-md-12 mb-3">
    <label for="ytb" class="form-label">Category</label>
    <select class="form-select" id="inputGroupSelect02" name="category">
      <option selected>Choose...</option>
      <option value="1">Category 1</option>
      <option value="2">Category 2</option>
      <option value="3">Category 3</option>
    </select>
    @if ($errors->has('category'))
        <span class="text-danger text-left">{{ $errors->first('category') }}</span>
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