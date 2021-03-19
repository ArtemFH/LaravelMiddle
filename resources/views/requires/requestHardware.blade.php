@extends('layouts.base')
@section('head')
    @parent
    <title>{{ $title }}</title>
@endsection
@section('body')
    <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.requestHardware') }}">
        @csrf
        <div class="form-group">
            <label for="CPU" class="col-form-label-lg">CPU</label>
            <input id="CPU" class="form-control" name="CPU" autocomplete="off" type="text" value="" placeholder="CPU">
        </div>
        <div class="form-group">
            <label for="GPU" class="col-form-label-lg">GPU</label>
            <input id="GPU" class="form-control" name="GPU" type="text" value="" placeholder="GPU">
        </div>
        <div class="form-group">
            <label for="RAM" class="col-form-label-lg">RAM</label>
            <input id="RAM" class="form-control" name="RAM" type="text" value="" placeholder="RAM">
        </div>
        <div class="form-group">
            <label for="PSU" class="col-form-label-lg">PSU</label>
            <input id="PSU" class="form-control" name="PSU" type="text" value="" placeholder="PSU">
        </div>
        <div class="form-group">
            <label for="storage" class="col-form-label-lg">storage</label>
            <input id="storage" class="form-control" name="storage" type="text" value="" placeholder="storage">
        </div>
        <div class="form-group">
            <label for="motherboard" class="col-form-label-lg">motherboard</label>
            <input id="motherboard" class="form-control" name="motherboard" type="text" value="" placeholder="motherboard">
        </div>
        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit" name="send" value="1">Hardware</button>
        </div>
    </form>
@endsection
