<?php
if (Auth::user()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
    $bg="dark";
    $text = "light";
}

?>


    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel bg-<?php echo e($bg); ?>">
            <div class="content bg-<?php echo e($bg); ?>">
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
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="p-4 card-body">
                                            <h3 class="card-title">My <?php echo e($settings->token_symbol); ?> Token</h3>
                                            <div class="p-3 mt-3 border rounded">
                                               <h5>Token Purchased</h5> 
                                               <h1 class="text-secondary d-inline"><?php echo e(number_format(Auth::user()->token_bal)); ?> <?php echo e($settings->token_symbol); ?></h1>
                                               <a href="<?php echo e(route('buytoken')); ?>" class="float-right p-2 btn btn-primary">Buy More Token</a>  &nbsp; &nbsp;
                                               <p>Equivalent to <?php echo e(number_format($total)); ?> USD</p>
                                            </div>

                                            <div class="p-3 mt-3 border rounded">
                                                <div>
                                                    <h5 class="d-block">Total Token Balance</h5> 
                                                    <h1 class="text-secondary d-inline"><?php echo e(number_format(Auth::user()->tot_tk_bal)); ?> <?php echo e($settings->token_symbol); ?></h1> 
                                                    <a href="#" data-toggle="modal" data-target="#transfermodal" class="float-right p-2 btn btn-danger"><i class="fas fa-reply"></i> Transfer</a> 
                                                </div>
                                                
                                                <div class="mr-2 d-inline mr-md-4">
                                                    <span><strong>Referral Token:</strong> </span> 
                                                    <span><?php echo e(number_format(Auth::user()->ref_bonus)); ?> <?php echo e($settings->token_symbol); ?></span> 
                                                </div>
                                                <div class="mr-2 d-inline mr-md-4">
                                                    <span> <strong>Bonuses Token: </strong> </span> 
                                                    <span><?php echo e(number_format(Auth::user()->tk_bonus_bal)); ?> <?php echo e($settings->token_symbol); ?></span>
                                                </div>
                                                <div class="d-inline">
                                                    <span> <strong>ROI Token: </strong> </span> 
                                                    <span><?php echo e(number_format(Auth::user()->roi_bal,2, '.', ',')); ?> <?php echo e($settings->token_symbol); ?></span>
                                                </div>
                                             </div>
                                             <div class="p-3 mt-3 border rounded">
                                                <h5>Total Contributed</h5> 
                                                <h1 class="text-info"><?php echo e(number_format($total)); ?> USD</h1>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php echo $__env->make('user.include.sideaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>   
                    </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/mytoken.blade.php ENDPATH**/ ?>