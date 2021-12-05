<!-- Page header -->
<section class="content-header">
    <h1>{{$title}}</h1>
</section>
<!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Input group addons -->
    <div class="box card">
        <form role="form" enctype="multipart/form-data" method="post" action="{{ route('galleries.update',['gallery' => $item->id ]) }}">

            @csrf
            @method('PUT')
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <fieldset class="mb-3">
                    <legend class="">{{__('Common info')}}</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Заголовок')}}<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="title" required class="form-control"
                                       value="{{ $item->title ?? "" }}"
                                       placeholder="{{__('Title')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Картинка')}}<span
                                class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input id="ckfinder-input-1" required value="{{ $item->img ?? "" }}" name="img" type="text" style="width:60%">
                                <a id="ckfinder-popup-1" class="btn btn-success">Выбрать на серевере</a></div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Псевдоним')}}</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="alias" class="form-control"
                                       value="{{ $item->alias ?? "" }}"
                                       placeholder="{{__('Alias')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Описание')}}</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                <input type="text" name="description" class="form-control"
                                       value="{{ $item->description ?? "" }}"
                                       placeholder="{{__('Description')}}">
                            </div>
                        </div>
                    </div>


                </fieldset>
                <button type="submit" class="btn btn-success">{{__('Submit')}}</button>


            </div>
        </form>
    </div>
    <!-- /input group addons -->

</div>
@include('ckfinder::setup')

<script>
    var button1 = document.getElementById( 'ckfinder-popup-1' );
    var button2 = document.getElementById( 'ckfinder-popup-2' );

    button1.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    };
    button2.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-2' );
    };

    function selectFileWithCKFinder( elementId ) {
        CKFinder.popup( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var output = document.getElementById( elementId );
                    output.value = file.getUrl();
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var output = document.getElementById( elementId );
                    output.value = evt.data.resizedUrl;
                } );
            }
        } );
    }
</script>
<!-- /content area -->
