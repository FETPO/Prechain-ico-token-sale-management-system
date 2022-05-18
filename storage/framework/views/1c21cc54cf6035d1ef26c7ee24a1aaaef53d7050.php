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
                    <div class="mt-2 mb-4">
                        <h2 class="text-<?php echo e($text); ?> pb-2">Welcome, <?php echo e(Auth::user()->name); ?>!</h2>
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
                    <div class="row row-card-no-pd bg-<?php echo e($bg); ?> shadow-none">
                        <div class="col-sm-6 col-md-4">
                            <div class="card card-round bg-<?php echo e($bg); ?>">
                                <div class="card-body">
                                    <div class="row bg-primary">
                                        <div class="p-3 col-12 col-stats">
                                            <div class="text-white numbers">
                                            <i class="fa fa-download text-warning"></i>
                                            <p class="text-white card-category">Token Balance</p>
                                            <h4 class="card-title text-<?php echo e($bg); ?>">
                                                <?php if(empty(Auth::user()->tot_tk_bal)): ?>
                                                    0
                                                <?php else: ?>
                                                  <?php echo e(Auth::user()->tot_tk_bal); ?>   
                                                <?php endif; ?>
                                                
                                                <?php echo e($settings->token_symbol); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-sm-6 col-md-4">
                            <div class="bg-white card card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-stats">
                                            <div class="numbers">
                                                <h3 class="card-category">
                                                    <?php if($stage): ?>
                                                        <?php echo e($stage->stage_name); ?> 
                                                        <?php if($stage->sales == "on" && $stage->status == "active"): ?>
                                                        <span class="px-3 py-1 badge badge-success">
                                                        running 
                                                        </span>
                                                        <?php else: ?>
                                                        <span class="px-3 py-1 badge badge-warning">
                                                            paused 
                                                        </span>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        No Active Stage at the Moment
                                                    <?php endif; ?>
                                                    
                                                </h3>
                                                <h4 class="card-title text-<?php echo e($text); ?>">1 <?php echo e($settings->token_symbol); ?> = <?php echo e($settings->amt_usd); ?> USD</h4>
                                                <a href="<?php echo e(route('buytoken')); ?>" class="p-2 btn btn-primary">Buy Token Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 col-sm-6 col-md-4">
                            <div class="bg-white card card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="p-3 col-12 col-stats">
                                            <div class="numbers">
                                                <h3 class="mb-3 card-category text-bold">Your Account Status</h3>
                                                <?php if(Auth::user()->email_verified_at): ?>
                                                <a href="#" class="p-2 mr-2 btn btn-success btn-sm">Email Verified</a>
                                                <?php else: ?>
                                                <a href="#" class="p-2 mr-2 btn btn-danger btn-sm">Email not Verified</a>
                                                <?php endif; ?>
                                                <?php if(Auth::user()->verification_status != "Verified"): ?>
                                                <a href="<?php echo e(route('kycinfo')); ?>" class="p-2 btn btn-primary btn-sm">Submit Kyc</a>
                                                <?php else: ?>
                                                <a href='#' class="p-2 btn btn-success btn-sm">Kyc Verified</a>
                                                <?php endif; ?>                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-card-no-pd bg-<?php echo e($bg); ?> shadow-none">
                       <div class="bg-white col-md-8">
                            <div class="row">
                                <div class="p-3 col-md-3">
                                    <img src="<?php echo e(asset('dash/img/prechain.png')); ?>" class="img-fluid w-125"> 
                                </div> 
                                <div class="p-3 col-md-9">
                                    <h3>Thank you for choosing Prechain</h3>
                                    <p>You can contribute to <?php echo e($settings->token_name); ?> project by purchasing <?php echo e($settings->token_symbol); ?> Token. you can even stake <?php echo e($settings->token_symbol); ?> to yield more return.</p>
                                    <p>You can get a quick response to any questions, and have a chat with the project team via our support email <?php echo e($settings->site_email); ?> </p>
                                    <p class="strong">Don’t hesitate to invite your friends! Your referral link: <?php echo e(Auth::user()->ref_link); ?></p>
                                    <a href="#" class="p-2 btn btn-primary">  <i class="text-white fa fa-download"></i> &nbsp; Download Whitepaper</a>
                                </div> 
                            </div>
                        </div> 
                    </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/dashboard.blade.php ENDPATH**/ ?>