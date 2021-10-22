@if(Session::get('user')) {{Session::get('user')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>

@extends('layouts.app')
@section('content')
    <table class="table table-borded">
        <tr>
            <th>Name</th>
            <th>Dob</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        @foreach($admins as $admin)
            <tr>
                <td>{{$admin->name}}</td>
                <td>{{$admin->dob}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->phone}}</td>
                <td><a href="/admin/edit/{{$admin->id}}/{{$admin->name}}">Edit</a></td>
                <td><a href="/admin/delete/{{$admin->id}}/{{$admin->name}}">Delete</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@endif