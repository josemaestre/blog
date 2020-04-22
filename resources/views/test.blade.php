@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                
                <div class="tabs-container">
                    <ul class="nav nav-tabs" role="tablist">
                        <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Detalle</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#tab-2">Lo que aprenderan</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#tab-3">Requisitos</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#tab-4">Contenido</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                               {{-- {{ $error->first('name')}} <br> --}}

                            <form method="POST" action="{{ route('cursos') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group row  {{ $errors->has('nombre') ? ' has-error' : '' }} "><label class="col-sm-2 col-form-label">Nombre del Curso</label>

                                <div class="col-sm-10"><input type="text" value="{{ old('nombre')}}"  name="nombre" placeholder="curso" class="form-control"></div>
                                </div>
                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif  
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row {{ $errors->has('contenido') ? ' has-error' : '' }}"><label class="col-sm-2 col-form-label">Contenido</label>

                                    <div class="col-sm-10"><input type="text"value="{{ old('contenido')}}"  name="contenido" placeholder="Contenido" class="form-control"></div>
                                </div>
                                @if ($errors->has('contenido'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contenido') }}</strong>
                                    </span>
                                @endif
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row {{ $errors->has('requisito') ? ' has-error' : '' }}"><label class="col-sm-2 col-form-label">Requisitos</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('requisito')}}"  name="requisitos" placeholder="Requisitos" class="form-control"></div>
                                </div>
                                @if ($errors->has('requisito'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('requisito') }}</strong>
                                    </span>
                                @endif
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row {{ $errors->has('horas') ? ' has-error' : '' }}"><label class="col-sm-2 col-form-label">Horas</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('horas')}}" name="horas" placeholder="Horas" class="form-control"></div>
                                </div>
                                @if ($errors->has('horas'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('horas') }}</strong>
                                </span>
                                @endif

                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Idioma</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('nombre')}}" name="idioma" placeholder="Idioma" class="form-control"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Costo</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('costo')}}"  name="costo" placeholder="costo" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Descr</label>

                                    <div class="col-sm-10"><input type="text" value="{{ old('descip')}}"  name="descript" placeholder="costo" class="form-control"></div>
                                </div>

                                </div>
                            </div>
                            <div role="tabpanel" id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    
                                    <div class="ibox-title">
                                        <h5>Wyswig Summernote Editor</h5>
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
                                    {{-- <textarea name="content" id="content" style="display:none;">     </textarea> --}}
                                    <div class="ibox-content no-padding">
                                        
                                        <textarea name="content" id="content" class="summernote" >
                                            {{-- <div class="summernote" style="display: none;"> --}}
                                                <h3>Lorem Ipsum is simply</h3>
                                                dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                                                <br>
                                                <br>
                                                <ul>
                                                    <li>Remaining essentially unchanged</li>
                                                    <li>Make a type specimen book</li>
                                                    <li>Unknown printer</li>
                                                </ul>
                                            </textarea>
                                        </div>
                                        <strong>Donec quam felis</strong>
                                        
                                        <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                            and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                                            
                                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                                sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                            </div>
                                        </div>
                                        
                                                                        <div role="tabpanel" id="tab-3" class="tab-pane">
                                                                            <div class="panel-body">
                                                                                <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                                                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                                                                                    
                                                                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                                                                        sense              
                                                                            </div>
                                                                        </div>

                                                                        <div role="tabpanel" id="tab-4" class="tab-pane">
                                                                            <div class="panel-body">
                                                                                <p>10000 Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                                                                    and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
                                                                                    
                                                                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                                                                        sense              
                                                                            </div>
                                                                        </div>   
                                    </div>
                                    
                                    
                                </div>  
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white btn-sm" type="submit">Cancel</button>
                                        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
                                    </div>
                                </div>
                                            
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
<script src="{!! asset('js/jquery-3.1.1.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/popper.min.js') !!}" type="text/javascript"></script>

<script src="{!! asset('web/js/plugins/summernote/summernote-bs4.js') !!}" type="text/javascript" defer></script>


<script>
    $(document).ready(function(){

        $('.summernote').summernote();

   });
</script>
@endsection



