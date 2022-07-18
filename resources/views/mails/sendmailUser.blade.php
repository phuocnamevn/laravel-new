@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="float-start">Send email to user </h2>
            <a href="/admin/user" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="col-md-12">
            <form class="g-3 needs-validation" method="post" action="{{ route('permission.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-control" name="mail">
                            <option>Select a user</option>
                            @if ($list)
                            @foreach($list as $key => $value)
                            <option>{{ $value['name'] }}</option>
                            @endforeach
                            @endif
                        </select>
                        @error('mail')
                        <span class="text-danger text-left">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection