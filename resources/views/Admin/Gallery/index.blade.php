<!-- Page header -->
<section class="content-header">
    <h1>{{$title}}</h1>
    <a href="{{route('galleries.create')}}" class="btn btn-success">{{ __('Create') }}</a>

</section>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <!-- Hover rows -->
    <div class="card">
        <div class="table-responsive">
            @if($galley)
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('img') }}</th>
                        <th>{{ __('Actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galley as $creation)
                        <tr>
                            <td>{{$creation->id}}</td>
                            <td><img style="width: 100%" src="{{$creation->img}}"></td>
                            <td>
                                <a href="{{route('galleries.edit',['gallery'=>$creation->id])}}"
                                   class="btn btn-primary btn-labeled">{{ __('Edit') }}
                                </a>


                                <form method="post"  action="{{route('galleries.delete',['gallery'=>$creation->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button  type="submit" class="btn btn-danger">{{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <div style="display:none">
                        <form method="post" id="contact-applications-delete" action="">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>

                    </tbody>
                </table>
            @endif
        </div>
    </div>
    <!-- /hover rows -->

</div>
<!-- /content area -->
