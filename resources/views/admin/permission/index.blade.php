@extends('layouts.admin.master')
@section('content')
<style>
    .row{
        padding: 15px;
    }
    .pagination {
        display: flex;
        justify-content: center;
}
</style>
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
    <div class="col-md-12">
    <h2 class="float-start">List Permission</h2>
    <a href="/admin/permission/create" class="btn btn-primary float-end">Create+</a>
    </div>
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Permission ID</th>
        <th scope="col">Permission Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Admin</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>2</td>
        <td>User</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Banned</td>
        <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Delete</button></td>
      </tr>
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
