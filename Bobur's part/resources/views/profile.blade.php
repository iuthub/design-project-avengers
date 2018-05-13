@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{ asset("uploads/avatars/" . $user->avatar) }}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;"> 
            <h2>{{ $user->first_name . " " . $user->last_name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="{{ route('update_avatar') }}" method="POST">
                <label>Update Profile</label> <br>
                <label>First Name:</label>
                <input type="text" name="first_name" value="{{ $user->first_name }}"> <br>
                <label>Last Name:</label>
                <input type="text" name="last_name" value="{{ $user->last_name }}"> <br>
                <label>E-mail:</label>
                <input type="text" name="email" value="{{ $user->email }}"> <br>
                <label>Current Password:</label>
                <input type="password" name="password"> <br>
                <label>New Password:</label>
                <input type="password" name="new_password"> <br>
                <label>Confirm Password:</label>
                <input type="password" name="confirm_password"> <br>
                <label>Icon:</label><br>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
                <input type="submit" value="Update" class="pull-right btn btn-sm btn-primary" style="margin-top: 10px;">
            </form>
        </div>
    </div>
</div>
@endsection
