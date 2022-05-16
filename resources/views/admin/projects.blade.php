@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <a href="/create_project" class="btn btn-success" style="margin-left: 0px;">Create Project</a>
        <h6 class="panel-heading" style="background-color: white; padding:1ch;">Projects List</h6>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
         @endif
         <table class="table" style="background: white; padding:0%">
        <tr style="background-color:rgb(236, 234, 234);">
            <td><b>Title</b></td>
            <td><b>Description</b></td>
            <td><b>Deadline</b></td>
            <td><b>Assigned User</b></td>
            <td><b>Assigned Client</b></td>
            <td><b>Status</b></td>
             @hasrole('Admin')
            <td colspan="2"><b>Action</b></td>
            @endhasrole
        </tr>

    @foreach ($projects as $project )
    <tr>
        <td>{{$project->title}}</td>
        <td>{{$project->description}}</td>
        <td>{{$project->deadline}}</td>
        <td>{{$assigned_user}}</td>
        <td>{{$assigned_client}}</td>
        <td>{{$project->status}}</td>
         @hasrole('Admin')
        <td colspan="2"><a href="edit_project/{{$project->id}}">Edit</a>

            |  <a href="destroy_project/{{$project->id}}">Delete</a>
        @endhasrole
            </td>
    </tr>
    @endforeach

    </table>
    <div class="col-md-12">
        {!! $projects->links() !!}
    </div>
    </div>
@endsection
