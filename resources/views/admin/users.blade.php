@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <h6 class="panel-heading" style="background-color: white; padding:1ch;">Users List</h6>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
         @endif
         <table class="table" style="background: white; padding:0%">
        <tr style="background-color:rgb(236, 234, 234);">
            <td><b>Name</b></td>
            <td><b>Email</b></td>
            <td><b>Current Role</b></td>
             @hasrole('Admin')
            <td colspan="2"><b>Action</b></td>
             @endhasrole
        </tr>

    @foreach ($users as $user )
    <tr>
    
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @foreach($user->roles as $role)
        <td>{{$role->name}}</td>
        @endforeach
          @hasrole('Admin')
            <td colspan="2"><a href="assignrole/{{$user->id}}">Assign Role</a>
          
            | <a href="destroy/{{$user->id}}">Delete</a>
            @else

            @endhasrole
            
        </td>
    </tr>
    @endforeach

    </table>
    <div class="col-md-12">
        
    </div>
    </div>
@endsection
