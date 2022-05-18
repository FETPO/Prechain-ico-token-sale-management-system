

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <span class="card-title">Referrals for <?php echo e($user->name); ?></span>
                                <a href="<?php echo e(route('viewuser', $user->id)); ?>" class="float-right btn btn-danger btn-sm"> <i class='fas fa-arrow-left'></i> go back</a>
                                <div class="mt-4">
                                    <?php if($referdby != NULL): ?>
                                    <div class="p-2 text-center shadow bg-primary">
                                        <h4 class='text-white'><?php echo e($user->name); ?> was referred by</h4>
                                        <h2><?php echo e($referdby->name); ?></h2>
                                    </div>  
                                    <?php endif; ?>
                                    <hr>

                                    <div class="table-responsive"> 
                                        <table class="table" id="ttable"> 
                                            <thead> 
                                                <tr> 
                                                    <th>USER REFERRED</th>
                                                    <th>EARN TOKEN</th>
                                                    <th>DATE REGISTERED</th>
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <?php $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr> 
                                                    <td><?php echo e($ref->name); ?></td> 
                                                    <td><?php echo e($ref->bonus_to_ref); ?> <?php echo e($settings->token_symbol); ?></td> 
                                                    <td><?php echo e(\Carbon\Carbon::parse($ref->created_at)->toDayDateTimeString()); ?></td>
                                                </tr>   
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody> 
                                        </table>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/referral.blade.php ENDPATH**/ ?>