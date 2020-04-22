@extends('layouts.app')

@section('title', 'edit curso')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="social-feed-separated">
        <div class="social-avatar">
            <a href="">
                <img alt="image" src="{!! asset('img/a5.jpg') !!}">
            </a>
        </div>

        <div class="social-feed-box">

            <div class="float-right social-action dropdown">
                <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu m-t-xs">
                    <li><a href="#">Config</a></li>
                </ul>
            </div>
            <div class="social-avatar">
                <a href="#">
                    {{ $post[0]->name }}

                </a>
                <small class="text-muted">{{ $post[0]->created_at }}
                </small>
            </div>
            <div class="social-body">
                <h3>
                Titulo: {{ $post[0]->tittle }}
                </h3>
              

                <p>
                    {{ $post[0]->content }}

                  
                </p>
        <form method="POST" action="{{ route('comment') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="post_id" value="{{ $post[0]->id }}">

                <img src="{!! asset('img/gallery/9.jpg') !!}" class="img-fluid">
                <div class="btn-group">
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i>{{ $post[0]->vote_up }} Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-down"></i>{{ $post[0]->vote_down }} Doesn't Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                </div>

                <div class="social-comment">
                    {{-- <a href="" class="float-left">
                        <img alt="image" src="{!! asset('img/a4.jpg') !!}">
                    </a> --}}
                    <div class="media-body">
                        <textarea id='comment' name='comment' class="form-control" placeholder="Write comment..."></textarea>
                    </div>
                    @if ($errors->has('comment'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('comment') }}</strong>
                    </span>
                    @endif 
                </div>

            </div>
        </form>




            <div class="social-footer">
                @forelse($comments as $co)

                    <div class="social-comment">
                        <a href="" class="float-left">
                            <img alt="image" src="{!! asset('img/a3.jpg') !!}">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                {{ $co->name }}
                            </a>
                            {{ $co->comment }}
                            <br/>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                            <small class="text-muted">{{ $co->created_at }}</small>
                        </div>
                    </div>
                    @empty
                    <tr>
                        <td colspan="4" align="center"> No comments yet...
                    </tr>
                    {{-- @forelse --}}

                    @endempty





            </div>
        </div>
    </div>

</div>
@endsection



<!-- Custom and plugin javascript -->
<script src="{!! asset('js/inspinia.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/pace/pace.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/wow/wow.min.js') !!}" type="text/javascript"></script>
 <!-- Toastr -->
 <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}" type="text/javascript"></script>
 {{-- <script src="js/plugins/toastr/toastr.min.js"></script> --}}

<script>
    // toastr('Are you the 6 fingered man?');
    </script>
