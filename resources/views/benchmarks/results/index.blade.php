@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <div class="container col-6">
        <div class="row pb-4">
            <div class="col">
                <div class="list-group mt-3">
                    <a href="{{ route('results.'.$indexResultGet->nomination->name) }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Nomination: {{$indexResultGet->nomination->name}}</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Score: {{ $indexResultGet->score }}</p>
                        <div>
                            <small class="sm">Enthusiast:
                                <sm>{{ $indexResultGet->user->username }}</sm>
                            </small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
