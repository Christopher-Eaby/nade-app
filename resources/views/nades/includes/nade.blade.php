<div class="col-4">
    <div class="row">
        <div class="col-12 block">
            <a href="/nade/view/{{$nade->_id}}">
                <h1>
                    {{$nade->title}}
                </h1>
            </a>
        </div>
        <div class="col-12">
            {{$maps[$nade->map]}} - {{$types[$nade->type]}} - {{$sides[$nade->side]}}
        </div>
        @if($nade->preview_image && $nade->lineup_image)
            <div class="col-12 block">
                <a href="/nade/view/{{$nade->_id}}">
                    @if($nade->preview_image)
                        <img class="img-fluid img-position" src="{{$nade->preview_image}}">
                    @endif
                    @if($nade->lineup_image)
                        <img class="img-fluid img-lineup" src="{{$nade->lineup_image}}">
                    @endif
                </a>
            </div>
        @endif
    </div>
</div>