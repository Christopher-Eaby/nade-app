@extends('layouts.index')

@section('content')
    <div class="row">
        @foreach($nades as $nade)
            @include('nades.includes.nade', ['nade' => $nade])
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