@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h3 class="text-black-50">Edit Profile</h3>
    </div>

    <div class="panel-body" style="padding-left: 1cm">
                <form method="POST" name="profile-edit" action="{{route('profile.update',['id'=>$user->id])}}" enctype="multipart/form-data">
                    
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                               Name<input type="text" name="name" value="{{$user->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               Email<input type="text" name="email" value="{{$user->email}}" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               
                                Photo <input type="file" name="photo" value="{{$user->photo}}"class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>

                        @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>{{$message}}</strong>
                                    </div>

                        @endif
                </form>
    </div>
@endsection
