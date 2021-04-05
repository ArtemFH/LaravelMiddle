@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3" method="POST" action="{{ route('user.requestBenchmark') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="score" class="col-form-label-lg">Score</label>
            <input id="score" class="form-control" name="score" autocomplete="off" type="text" value="" placeholder="Score">
            @error('Score')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image" class="col-form-label-lg">Image</label>
            <input id="image" class="form-control" name="image" autocomplete="off" type="file" accept=".png, .jpg, .jpeg" value="" placeholder="Image">
            @error('Image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group center">
            <button class="buttonSuccess btn btn-lg btn-primary" type="submit" name="send" value="1">Send Result</button>
        </div>
    </form>
@endsection
