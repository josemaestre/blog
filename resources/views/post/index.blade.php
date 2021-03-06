@extends('layouts.app')

@section('title', 'edit curso')

@section('content')
{{-- {{ dd($cursos) }} --}}
<div class="wrapper wrapper-content animated fadeInRight">
    
        <div class="ibox-title">
                <h5>Listado de post</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            
            @include('partials.session')


            

            <div class="ibox-content">

                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Post</th>
                        <th>Creacion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($postses as $post)
        
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td><a href="{{ route('post.show',$post->id)}}" >{{ $post->post}}</a></td>
                        <td>{{ $post->created_at->format('d/m/Y')}}</td>
                        <td>--</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center"> NO HAY CURSOS AUN ):</td>
                    </tr>
                    {{-- @forelse --}}
                    
                    @endempty

                    
                </tbody>
                {{-- {{  $cursosPag->links() }} --}}
                </table>

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