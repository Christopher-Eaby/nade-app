@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/admin/nades/create" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($nades as $nade)
            <div class="col-3 mt-1 block">
                <a href="/admin/nades/edit/{{$nade->_id}}">
                    <div class="row">
                        <div class="col-12 py-2">
                            {{$nade->title}}
                        </div>
                        <div class="col-12 py-2">
                            {{$maps[$nade->map]}} - {{$types[$nade->type]}} - {{$sides[$nade->side]}}
                        </div>
                        <div class="col-12 py-2">
                            @if($nade->preview_image)
                                <img class="img-fluid img-position" src="{{$nade->preview_image}}">
                            @endif
                        </div>
                        <div class="col-12 py-2">
                            <div class="row">
                                <div class="col-4">
                                    <a class="btn btn-primary w-100" href="/admin/nades/edit/{{$nade->_id}}">Edit</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-secondary w-100" href="/admin/nades/enable/{{$nade->_id}}">@if($nade->enable) Hide @else Show @endif</a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-danger w-100" href="/admin/nades/delete/{{$nade->_id}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection