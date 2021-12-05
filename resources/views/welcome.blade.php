<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">

</nav>

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2">{{__('Картинка')}}<span
                class="text-danger">*</span></label>
        <div class="col-lg-10">
            <div class="input-group">
                <input id="ckfinder-input-1" required name="img" type="text" style="width:60%">
                <a id="ckfinder-popup-1" class="btn btn-success">Выбрать на серевере</a></div>
        </div>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

</body>
</html>








<html>

<body>

<div class="container">
    <div class="row col-lg-12">

        <button id="ckfinder-modal" type="button" class="btn btn-primary col-lg-12">Choose File</button>
    </div>
</div>
@include('ckfinder::setup')





<script>
    var button = document.getElementById( 'ckfinder-modal' );

    var button1 = document.getElementById( 'ckfinder-popup-1' );
    var button2 = document.getElementById( 'ckfinder-popup-2' );

    button1.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    };

    button.onclick = function() {
        CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var outputFileName = document.getElementById( 'file-name' );
                    var outputFileUrl = document.getElementById( 'file-url' );
                    outputFileName.innerText = 'Selected: ' + file.get( 'name' );
                    outputFileUrl.innerText = 'URL: ' + file.getUrl();
                } );

                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var outputFileName = document.getElementById( 'file-name' );
                    var outputFileUrl = document.getElementById( 'file-url' );
                    outputFileName.innerText = 'Selected resized image: ' + evt.data.file.get( 'name' );
                    outputFileUrl.innerText = 'URL: ' + evt.data.resizedUrl;
                } );
            }
        } );
    };

    var button1 = document.getElementById( 'ckfinder-modal-1' );
    var button2 = document.getElementById( 'ckfinder-modal-2' );

    button1.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-1' );
    };
    button2.onclick = function() {
        selectFileWithCKFinder( 'ckfinder-input-2' );
    };

    function selectFileWithCKFinder( elementId ) {
        CKFinder.modal( {
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

</body>
</html>
