@extends('layouts.index')

@section('content')
    <a href="/nades" class="btn btn-secondary">Back</a>
    <div class="row mt-4">
        <div class="col-12">
            <h2>{{$nade->title}}</h2>
        </div>

        @if($nade->description)
            <div class="col-12">
                {!!$nade->description!!}
            </div>
        @endif

        <div class="col-12">
            {{$maps[$nade->map]}} - {{$sides[$nade->side]}} - {{$types[$nade->type]}}
        </div>
        
        <div class="col-12">
            <img class="img-fluid" src="{{$nade->position_image}}">
        </div>
        <div class="col-12">
            <img class="img-fluid" src="{{$nade->lineup_image}}">
        </div>
        <div class="col-12">
            <video autoplay muted class="img-fluid my-4" src="{{$nade->lineup_video}}" id="lineup_video">
        </div>
    </div>
@endsection
