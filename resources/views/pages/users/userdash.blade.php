@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
        @extends('layouts.app')
@section('content')
    <form action="{{route('admin.create')}}" class="col-md-6" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-success" value="Add" >
    </form>
@endsection
        
    @endif