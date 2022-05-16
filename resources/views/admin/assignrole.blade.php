@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h3 class="text-black-50">Assign Role to User</h3>
    </div>

    <div class="panel-body" style="padding-left: 1cm">
                <form method="POST" action="{{route('role.update',['id'=>$user->id])}}">
                     @csrf
                        <div class="row">
                            <div class="col-md-6">
                                Name<label class="form-control"> {{$user->name}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                Email<label class="form-control">{{$user->email}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                               Role <select name="role" class="form-control">
                               @foreach($roles as $role)
                               {
                                   <option value="{{$role->id}}">{{$role->name}}</option>
                               }
                               @endforeach
                                    </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Assign Role</button>
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
