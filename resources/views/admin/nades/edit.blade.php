@extends('layouts.admin')

@section('content')
    <a href="/admin/nades" class="btn btn-secondary">Back</a>
    <form method="post" class="form-group">
        <div class="row mt-4">
            <div class="col-12">
                <h1>
                    Nade
                </h1>
            </div>

            {{ csrf_field() }}

            <div class="col-12 col-md-6">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" value="{{$nade->title}}" required>
            </div>

            <div class="col-12 col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" type="text" name="description" id="description" value="{{$nade->description}}">{!! $nade->description !!}</textarea>
            </div>

            <div class="col-12 col-md-6">
                <label for="map">Map</label>
                <select class="form-control" type="text" name="map" required>
                    @foreach($maps as $key => $map)
                        <option value="{{$key}}" @if($key == $nade->map) selected @endif>{{$map}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6">
                <label for="type">Nade type</label>
                <select class="form-control" type="text" name="type" required>
                    @foreach($types as $key => $type)
                        <option value="{{$key}}" @if($key == $nade->type) selected @endif>{{$type}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6">
                <label for="side">CT/T side</label>
                <select class="form-control" type="text" name="side" required>
                    @foreach($sides as $key => $side)
                        <option value="{{$key}}" @if($key == $nade->side) selected @endif>{{$side}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12 col-md-6">
                <label for="position_image">Position Image</label>
                <input class="form-control image_upload" id="position_image" type="file">
                <img class="img-fluid my-4" src="{{$nade->position_image}}" id="position_image">
                <input class="form-control image_upload" id="position_image" type="hidden" name="position_image" value="{{$nade->position_image}}">
            </div>

            <div class="col-12 col-md-6">
                <label for="lineup_image">Lineup image</label>
                <input class="form-control image_upload" id="lineup_image" type="file">
                <img class="img-fluid my-4" src="{{$nade->lineup_image}}" id="lineup_image">
                <input class="form-control image_upload" id="lineup_image" type="hidden" name="lineup_image" value="{{$nade->lineup_image}}">
            </div>

            <div class="col-12 col-md-6">
                <label for="lineup_video">Lineup video</label>
                <input class="form-control image_upload" id="lineup_video" type="file">
                <video autoplay muted class="img-fluid my-4" src="{{$nade->lineup_video}}" id="lineup_video">
                </video>
                <input class="form-control image_upload" id="lineup_video" type="hidden" name="lineup_video" value="{{$nade->lineup_video}}">
            </div>

            <div class="col-12 col-md-6">
                <input class="btn btn-primary mt-4" type="submit">
            </div>
        </div>
    </form>

    <script>
        $('.image_upload').change(function(){
            console.log('here');
            var fd = new FormData();

            var files = $(this)[0].files;
            var name = $(this).attr('id');

            // Check file selected or not
            if(files.length > 0 ){

                fd.append('file',files[0]);
                fd.append('name', $(this).attr('name'));
                fd.append('_token', '{{csrf_token()}}');

                $.ajax({
                    url:'/admin/upload/image',
                    type:'post',
                    data:fd,
                    processData: false,     
                    contentType: false,     
                    cache: false,
                }).always(function(data){
                    $('input[name="' + name + '"]').val(data.image);
                    $('img#' + name).attr('src', data.image);
                    $('video#' + name).attr('src', data.image);
                });
            }else{
                alert("Please select a file.");
            }
        })
        ClassicEditor
            .create( document.querySelector( '#description' ), {
                // ...
                link: {
                    decorators: {
                        addTargetToExternalLinks: {
                            mode: 'manual',
                            label: 'New Window',
                            attributes: {
                                target: '_blank',
                            }
                        }
                    }
                }
            } )
            .catch( error => {
            // console.warn( error );
            } );
    </script>
@endsection