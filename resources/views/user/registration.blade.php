@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.registration') }}">
        @csrf
        <div class="form-group">
            <label for="username" class="col-form-label-lg">Username</label>
            <input id="username" class="form-control" name="username" autocomplete="off" type="username" value="" placeholder="Username">
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label-lg">Email</label>
            <input id="email" class="form-control" name="email" type="text" value="" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label-lg">Password</label>
            <input id="password" class="form-control" name="password" type="password" value="" placeholder="Password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit" name="send" value="1">Login</button>
        </div>
    </form>
@endsection