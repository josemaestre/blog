<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">

                                <strong class="font-bold">  <?php echo e(auth()->user()->name); ?></strong>
                            </span> <span class="text-muted text-xs block">Menu<b class="caret"></b></span>
                        </span>
                    </a>
                    <?php if(auth()->guard()->check()): ?>

                    <?php if(Auth::user()->hasRole('admin')): ?>
                      <div> Acceso como administrador</div>
                    <?php else: ?>
                      <div>Acceso usuario</div>
                    <?php endif; ?>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();>Logout</a></li>
                        </ul>
                    <?php endif; ?>

                    <?php if(auth()->guard()->guest()): ?>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?php echo e(route('login')); ?>" >Login</a></li>
                        </ul>
                    <?php else: ?>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                    <li> <a href="" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" > Logout </a>
                    </li>
                    </ul>


                    <?php endif; ?>
                </div>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
                <div class="logo-element">
                    B+
                </div>
            </li>

            <?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a href="<?php echo e(route('login')); ?>" ><i class="fa fa-th-large"></i> <span class="nav-label">Login</span></a>
                        </li>
            <?php endif; ?>

            <li class="<?php echo e(isActiveRoute('post')); ?>">
                <a href="<?php echo e(url('/post')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Ver post</span></a>
            </li>
            <li class="<?php echo e(isActiveRoute('post.create')); ?>">

                <a href="<?php echo e(url('/post/create')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Create Article</span></a>
            </li>
            <?php if(Auth::user()->hasRole('admin')): ?>
            <li class="<?php echo e(isActiveRoute('list')); ?>">
                <a href="<?php echo e(url('/list')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Administrar Post</span> </a>
            </li>
            <?php endif; ?>


        </ul>

    </div>
</nav>
<?php /**PATH X:\www\blogtest\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>