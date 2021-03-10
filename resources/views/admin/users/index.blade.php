@extends('layouts.base')

@section('body')
    @foreach($users as $user)
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $user->username }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
                {{--                <li class="list-group-item">{{ $user->roles->name }}</li>--}}
            </ul>
        </div>
        @if($user->role_id == 1)
            <button type="button" class="btn btn-success">Moderator</button>
        @endif
        @if($user->role_id == 2)
            <button type="button" class="btn btn-danger">User</button>
        @endif
    @endforeach
@endsection
