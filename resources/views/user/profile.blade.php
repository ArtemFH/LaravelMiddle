@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}: {{auth()->user()->username}}</title>
@endsection
@section('body')
    @auth
        @if(auth()->user()->hardware_id == !null)
            <ul class="p-3 w-50 list-group">
                <li class="list-group-item">Любимая номинация: {{ auth()->user()->like_nomination->name }}</li>
            </ul>
            <ul class="p-3 w-50 list-group">
                <li class="list-group-item">CPU: {{ auth()->user()->hardware->CPU }}</li>
                <li class="list-group-item">GPU: {{ auth()->user()->hardware->GPU }}</li>
                <li class="list-group-item">RAM: {{ auth()->user()->hardware->RAM }}</li>
                <li class="list-group-item">PSU: {{ auth()->user()->hardware->PSU }}</li>
                <li class="list-group-item">Storage: {{ auth()->user()->hardware->storage }}</li>
                <li class="list-group-item">Motherboard: {{ auth()->user()->hardware->motherboard }}</li>
            </ul>
        @else
            <button class="m-3 btn btn-success">Подать заявку</button>
        @endif
    @endauth
@endsection
