@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
    <div class="col-md-12">
    <h2 class="float-start">List Permission group</h2>
    <a href="/admin/permission-group/create" class="btn btn-primary float-end">Create+</a>
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
      @if($db)
      @foreach ($db as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td><a href="{{ route('permission-group.edit', $item->id) }}" class="btn btn-warning">Edit</a> <a href="{{ route('permission-group.show', $item->id) }}" class="btn btn-primary">Show</a>
          <form class="d-inline" method="post" action="{{ route('permission-group.destroy', $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
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
