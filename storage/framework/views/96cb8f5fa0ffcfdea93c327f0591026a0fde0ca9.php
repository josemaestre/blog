<?php $__env->startSection('title', 'crear curso'); ?>
<link href="<?php echo asset('css/plugins/summernote/summernote-bs4.css'); ?>" rel="stylesheet">
<link href="<?php echo asset('css/plugins/pace/pace.min.css'); ?>" rel="stylesheet">

<?php $__env->startSection('content'); ?>

<div class="wrapper wrapper-content animated fadeInRight">
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
<?php endif; ?>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Creacion de Post</h5>
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
            <div class="ibox-content">
            

            <form method="POST" action="<?php echo e(route('post.update',$post->id)); ?>">
                
        <div class="wrapper wrapper-content animated fadeInRight ecommerce">

                <div class="row">
                    <div class="col-lg-12">



                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group row  <?php echo e($errors->has('post') ? ' has-error' : ''); ?> "><label class="col-sm-2 col-form-label">Titulo de post</label>

                    <div class="col-sm-10"><input type="text"  name="post" placeholder="Titulo del post" class="form-control"  value=" <?php echo e($post->post); ?>"   ></div>
                    </div>


                    <?php if($errors->has('post')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('post')); ?></strong>
                    </span>
                    <?php endif; ?> 
                    

                    
                    
                    <div class="ibox-title">
                        <h5>Contenido del Post</h5>
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
                    
                    <div class="ibox-content no-padding">

                        <textarea name="content" id="content" class="summernote"  value = "<?php echo e($post->post); ?>">
                            <?php echo e(old('body', $post->content)); ?>

                        </textarea>
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
<script src="<?php echo asset('js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/popper.min.js'); ?>" type="text/javascript"></script>

<script src="<?php echo asset('web/js/plugins/summernote/summernote-bs4.js'); ?>" type="text/javascript" defer></script>


<script>
    $(document).ready(function(){

        $('.summernote').summernote();

   });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\www\blogtest\resources\views/post/edit.blade.php ENDPATH**/ ?>