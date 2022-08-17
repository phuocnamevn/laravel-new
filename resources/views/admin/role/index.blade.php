@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
  <div class="row" style="background-color: rgb(241, 241, 241);">
    <div class="col-md-12">
    <h2 class="float-start">{{__('messages.list_role')}}</h2>
    <a href="/admin/role/create" class="btn btn-primary float-end">{{__('messages.create')}}+</a>
    </div>
    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Permission ID</th>
        <th scope="col">Permission Name</th>
        <th scope="col">Permission Count</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if($roles)
      @foreach ($roles as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->permissions->Count()}}</td>
        <td><a href="{{ route('role.edit', $item->id) }}" class="btn btn-warning">{{__('messages.edit')}}</a> <a href="{{ route('role.show', $item->id) }}" class="btn btn-primary">{{__('messages.show')}}</a>
          <form class="d-inline" method="post" action="{{ route('role.destroy', $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('{{__('messages.do_you_want_to_delete')}}')" class="btn btn-danger"> {{__('messages.delete')}} </button>
        </form>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  <div class="col-md-12 text-center">
    <ul class="pagination">
      {{ $roles->links() }}
    </ul>
  </div>
</div>
@endsection
