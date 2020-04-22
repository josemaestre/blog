<?php if(session('status')): ?>
    

    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?php echo e(session('status')); ?>  <a class="alert-link" href="#">Alert Link</a>.
    </div>
        



         
<?php endif; ?><?php /**PATH X:\www\blogtest\resources\views/partials/session.blade.php ENDPATH**/ ?>