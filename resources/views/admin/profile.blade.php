@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <h6 class="panel-heading" style="background-color: white; padding:1ch;">Profile</h6>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
         @endif
         <table class="table" style="background: white; padding:0%">
        <tr style="background-color:rgb(236, 234, 234);">
            <td><b>Name</b></td>
            <td><b>Email</b></td>


            <td colspan="2"><b>Action</b></td>
        </tr>


    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td colspan="2">
            <a href="#">Edit Profile</a>
            |<a href="#">Delete Profile</a></td>
    </tr>


    </table>
    <div class="col-md-12">

    </div>
    </div>
@endsection
