@extends('layouts.base')

@section('body')
    @foreach($users as $user)
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $user->username }}</li>
                <li class="list-group-item">{{ $user->email }}</li>
                <li class="list-group-item">{{ $user->roles->name }}</li>
            </ul>
        </div>
        </br>
    @endforeach
@endsection
