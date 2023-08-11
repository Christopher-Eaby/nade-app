@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="/admin/nades/create" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        @foreach($nades as $nade)
            <div class="col-4 mt-1">
                <a href="/admin/nades/edit/{{$nade->_id}}" class="btn btn-secondary">{{$nade->title}}</a>
            </div>
        @endforeach
    </div>
@endsection