<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Learning Corner - <?php echo $__env->yieldContent('title'); ?> </title>


    
    <link rel="stylesheet" href="<?php echo asset('css/vendor.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/app.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('font-awesome/css/font-awesome.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('css/plugins/toastr/toastr.min.css'); ?>" >
    <link rel="stylesheet" href="<?php echo asset('css/plugins/summernote/summernote-bs4.css'); ?>" >
    <link rel="stylesheet" href="<?php echo asset('css/animate.css'); ?>" >
    



</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            <?php echo $__env->make('layouts.topnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

            <!-- Footer -->
            

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->


    <!-- Mainly scripts -->
    <script src="<?php echo asset('js/jquery-3.1.1.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/bootstrap.min.js'); ?>" type="text/javascript" defer></script>
    <script src="<?php echo asset('js/inspinia.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/plugins/metisMenu/jquery.metisMenu.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
    
    <script src="<?php echo asset('js/plugins/summernote/summernote-bs4.js'); ?>" type="text/javascript"></script>

    <!-- Toastr -->
    <script src="<?php echo asset('js/plugins/toastr/toastr.min.js'); ?>" type="text/javascript"></script>
    

<?php $__env->startSection('scripts'); ?>
<script>
    // alert('hola');
</script>
<?php echo $__env->yieldSection(); ?>

</body>
</html>
<?php /**PATH X:\www\blogtest\resources\views/layouts/app.blade.php ENDPATH**/ ?>