<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="card-title">Ekko Lightbox</h4>
        </div>
        @if($gallery)
            <div class="card-body">
                <div class="row">
                    @foreach($gallery as $creation)
                        <div class="col-sm-2">
                            <a href="{{$creation->img}}" data-toggle="lightbox" data-title="{{$creation->title}}" data-gallery="gallery">
                                <img src="{{$creation->img}}" class="img-fluid mb-2" alt="{{$creation->title}}"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

