<?php $__env->startSection('title', 'edit curso'); ?>

<?php $__env->startSection('content'); ?>

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
            
            <?php echo $__env->make('partials.session', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            

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
                        <?php $__empty_1 = true; $__currentLoopData = $postses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        
                    <tr>
                        <td><?php echo e($post->id); ?></td>
                        <td><a href="<?php echo e(route('post.show',$post->id)); ?>" ><?php echo e($post->post); ?></a></td>
                        <td><?php echo e($post->created_at->format('d/m/Y')); ?></td>
                        <td>--</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" align="center"> NO HAY CURSOS AUN ):</td>
                    </tr>
                    
                    
                    <?php endif; ?>

                    
                </tbody>
                
                </table>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\www\blogtest\resources\views/post/index.blade.php ENDPATH**/ ?>