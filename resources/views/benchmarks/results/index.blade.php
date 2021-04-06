@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    {{--    {{ dd($indexResultGet) }}--}}
    <div class="container col-6">
        <div class="row pb-4">
            <div class="col">
                <div class="list-group mt-3">
                    <a href="{{ route('results.'.$indexResultGet->nomination->name) }}" class="headNomination list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Nomination: {{$indexResultGet->nomination->name}}</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <p class="mb-1">Score: {{ $indexResultGet->score }}</p>
                        <p class="mb-1">Create result: {{ $indexResultGet->created_at }}</p>
                        <img style="width: 100%" src="{{ $indexResultGet->image }}" alt="post-image" class="card-image">
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
