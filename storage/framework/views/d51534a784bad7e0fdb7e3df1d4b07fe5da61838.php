

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1">Account Settings</h1>
            </div>
            <?php if (isset($component)) { $__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DangerAlert::class, []); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a)): ?>
<?php $component = $__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a; ?>
<?php unset($__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SuccessAlert::class, []); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126)): ?>
<?php $component = $__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126; ?>
<?php unset($__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <!-- Beginning of  Dashboard Stats  -->
            <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert" >
                        <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <i class="fa fa-warning"></i> <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="#ico" class="nav-link active" data-toggle="tab">Account Information</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#webset" class="nav-link" data-toggle="tab">Security</a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ico">
                                    <div class="row profile">
                                        <div class="p-2 col-md-8 offset-md-2">
                                            <div class="card p-5 shadow-lg ">
                                                <form role="form" method="post"action="<?php echo e(route('upadprofile')); ?>">
                                                    <label class="">Name</label>
                                                    <input type="text" name="name" value="<?php echo e(Auth('admin')->user()->name); ?>" class="form-control  "> <br>

                                                    <label class="">Email</label>
                                                    <input type="text" name="email" value="<?php echo e(Auth('admin')->user()->email); ?>" class="form-control  "> <br>

                                                    <label class="">Phone Number</label>
                                                    <input type="text" name="phone"  class="form-control  " value="<?php echo e(Auth('admin')->user()->phone); ?>"> <br>
                
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <input type="submit" class="btn btn-primary" value="Update">
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="webset">
                                    <div class="mb-5 row">
                                        <div class="col-lg-8 offset-lg-2 card p-4  shadow">
                                            <form method="post" action="<?php echo e(route('adminupdatepass')); ?>">
                                                <div class="form-group">
                                                    <label class=" ">Old Password</label>
                                                    <input type="password" name="old_password" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" ">New Password* </label>
                                                    <input type="password" name="password" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <label class=" ">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" class="form-control  " required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-primary" value="Submit">
                                                    <input type="hidden" name="id" value="<?php echo e(Auth('admin')->User()->id); ?>">
                                                    <input type="hidden" name="current_password" value="<?php echo e(Auth('admin')->User()->password); ?>">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/profile.blade.php ENDPATH**/ ?>