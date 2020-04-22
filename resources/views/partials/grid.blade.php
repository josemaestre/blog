<div class="ibox-title">
    <h1>{{ $etiqueta }}</h1>

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


<div class="row">
@foreach ($cursos as $curso)
        @php $imagen_curso = "images/".$loop->iteration. ".jpg"; @endphp
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div>
                        <div class="ibox-content no-padding ">
                            <img src="{{asset( $imagen_curso) }}">
                            <!-- <img src="{!! asset('images/3.jpg') !!}" > -->

                            <!-- <img src="{!! asset('images/{{ $loop->iteration }}.jpg') !!}"> -->
                        </div>
                    </div>
                    <div class="product-desc">
                        <span class="product-price">

                             {{ $curso->costo}} $
                        </span>
                        <i class="fa fa-clock-o"> 12 Horas</i>
                        <br>
                        <i class="fa fa-file-video-o"> 15 video lecciones</i>

                        <!-- <small class="text-muted">Category</small> -->
                        <a href="#" class="product-name">{{ $curso->nombre}}</a>



                        <div class="small m-t-xs">
                            
                        </div>
                        <div class="m-t text-righ">
                           

                                    <a href="{{ url('courseDetail', ['url' =>  $curso->url] ) }} " target='_blank'    class="btn btn-xs btn-outline btn-primary">Info <i
                                        class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endforeach