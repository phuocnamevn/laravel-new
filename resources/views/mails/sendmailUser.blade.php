@extends('layouts.admin.master')
@section('content')
<div class="col-md-7 mb-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="float-start">Send email to user </h2>
            <a href="/admin/user" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="col-md-12">
            <form class="g-3 needs-validation" method="post" action="{{ route('testmail') }}">
                @csrf
                <div class="row">
                    @if (Session::has('msg'))
                        <div class="alert alert-info">{{ Session::get('msg') }}</div>
                    @endif
                    <div class="col-md-12 mb-3">
                        <select class="form-control" name="mail">
                            <option value="all">Select a user</option>
                            @if ($users)
                            @foreach($users as $key => $value)
                            <option value="{{$value['email']}}">{{ $value['name'] }}</option>
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