@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <a href="/create_client" class="btn btn-success" style="margin-left: 0px;">Create Client</a>
        <h6 class="panel-heading" style="background-color: white; padding:1ch;">Clients List</h6>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
         @endif
         <table class="table" style="background: white; padding:0%">
        <tr style="background-color:rgb(236, 234, 234);">
            <td><b>Company</b></td>
            <td><b>VAT</b></td>
            <td><b>Address</b></td>
            @hasrole('Admin')
            <td colspan="2"><b>Action</b></td>
            @endhasrole
        </tr>

    @foreach ($clients as $client )
    <tr>
        <td>{{$client->company}}</td>
        <td>{{$client->vat}}</td>
        <td>{{$client->address}}</td>
        @hasrole('Admin')
        <td colspan="2"><a href="edit_client/{{$client->id}}">Edit</a>

            | <a href="destroy_client/{{$client->id}}">Delete</a>
        @endhasrole
        </td>
    </tr>
    @endforeach

    </table>
    <div class="col-md-12">
        {!! $clients->links() !!}
    </div>
    </div>
@endsection
