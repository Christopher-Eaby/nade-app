@extends('layouts.index')

@section('content')
    <div class="row">
        @foreach($nades as $nade)
            <div class="col-4">
                <div class="row">
                    <div class="col-12">
                        <a href="/nade/view/{{$nade->_id}}" class="btn btn-secondary">
                            <h1>
                                {{$nade->title}}
                            </h1>
                        </a>
                    </div>
                    <div class="col-12">
                        {!! $nade->description !!}
                    </div>
                    <div class="col-12">
                        {{$maps[$nade->map]}} - {{$sides[$nade->side]}} - {{$types[$nade->type]}}
                    </div>
                    <div class="col-12">
                        <a href="/nade/view/{{$nade->_id}}">
                            <img class="img-fluid img-position" src="{{$nade->position_image}}">
                            <img class="img-fluid img-lineup" src="{{$nade->lineup_image}}">
                        </a>
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>

    <script>
        $('.img-position').on('mouseenter', function(){
            $(this).hide();
            $(this).next().show();
        })
        $('.img-position').on('mouseleave', function(){
            $(this).show();
            $(this).next().hide();
        })
    </script>
@endsection