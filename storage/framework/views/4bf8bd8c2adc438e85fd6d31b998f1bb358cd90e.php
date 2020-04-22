<?php $__env->startSection('title', 'edit curso'); ?>

<?php $__env->startSection('content'); ?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="social-feed-separated">
        <div class="social-avatar">
            <a href="">
                <img alt="image" src="<?php echo asset('img/a5.jpg'); ?>">
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
                    <?php echo e($post[0]->name); ?>


                </a>
                <small class="text-muted"><?php echo e($post[0]->created_at); ?>

                </small>
            </div>
            <div class="social-body">
                <h3>
                Titulo: <?php echo e($post[0]->tittle); ?>

                </h3>
              

                <p>
                    <?php echo e($post[0]->content); ?>


                  
                </p>
        <form method="POST" action="<?php echo e(route('comment')); ?>">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="hidden" name="post_id" value="<?php echo e($post[0]->id); ?>">

                <img src="<?php echo asset('img/gallery/9.jpg'); ?>" class="img-fluid">
                <div class="btn-group">
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i><?php echo e($post[0]->vote_up); ?> Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-down"></i><?php echo e($post[0]->vote_down); ?> Doesn't Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                </div>

                <div class="social-comment">
                    
                    <div class="media-body">
                        <textarea id='comment' name='comment' class="form-control" placeholder="Write comment..."></textarea>
                    </div>
                    <?php if($errors->has('comment')): ?>
                    <span class="invalid-feedback">
                        <strong><?php echo e($errors->first('comment')); ?></strong>
                    </span>
                    <?php endif; ?> 
                </div>

            </div>
        </form>




            <div class="social-footer">
                <?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <div class="social-comment">
                        <a href="" class="float-left">
                            <img alt="image" src="<?php echo asset('img/a3.jpg'); ?>">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                <?php echo e($co->name); ?>

                            </a>
                            <?php echo e($co->comment); ?>

                            <br/>
                            <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                            <small class="text-muted"><?php echo e($co->created_at); ?></small>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" align="center"> No comments yet...
                    </tr>
                    

                    <?php endif; ?>





            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>



<!-- Custom and plugin javascript -->
<script src="<?php echo asset('js/inspinia.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/plugins/pace/pace.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/plugins/wow/wow.min.js'); ?>" type="text/javascript"></script>
 <!-- Toastr -->
 <script src="<?php echo asset('js/plugins/toastr/toastr.min.js'); ?>" type="text/javascript"></script>
 

<script>
    // toastr('Are you the 6 fingered man?');
    </script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\www\blogtest\resources\views/post/show.blade.php ENDPATH**/ ?>