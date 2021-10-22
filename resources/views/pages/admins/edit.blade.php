@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
<form action="{{route('admin.edit')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$admin->id}}">
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{$admin->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{$admin->dob}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$admin->email}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{$admin->phone}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
@endsection

@endif