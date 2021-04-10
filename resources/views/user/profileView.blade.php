@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{auth()->user()->username}}</title>
@endsection
@section('body')
    @auth
        {{--        {{ dd($check) }}--}}
        @if($profileUser->approved == 0)
            <ul class="p-3 w-50 list-group">
                <li class="list-group-item">CPU: {{ $hardware->CPU }}</li>
                <li class="list-group-item">GPU: {{ $hardware->GPU }}</li>
                <li class="list-group-item">RAM: {{ $hardware->RAM }}</li>
                <li class="list-group-item">PSU: {{ $hardware->PSU }}</li>
                <li class="list-group-item">Storage: {{ $hardware->storage }}</li>
                <li class="list-group-item">Motherboard: {{ $hardware->motherboard }}</li>
            </ul>
        @endif
    @endauth
    @guest()
        <div>
            <p>Viewing is available only to authorized users
                <br>
                Либо пошёл нахуй
            </p>
        </div>
    @endguest
@endsection
