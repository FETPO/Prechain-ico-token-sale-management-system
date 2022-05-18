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
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <h2>Referral</h2>
                                                <p>Invite your friends and family and receive free tokens.The referral link may be used during a token contribution, in the pre-sale and the ICO. Imagine giving your unique referral link to your crypto-friend and he or she contributes tokens using your link, the bonus will be sent to your account automatically. The strategy is simple: the more links you send to your colleagues, family and friends - the more tokens you may earn!</p>
                                                <h2>Referral URL</h2>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly"  value="<?php echo e(Auth::user()->ref_link); ?>" id="myInput" readonly>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </div>
                                                <small>Use above link to refer your friend and get referral bonus.</small>
                                                <hr>
                                                <?php if($referdby != NULL): ?>
                                                    <div class="p-2 text-center shadow bg-primary">
                                                        <h4 class='text-white'>I was referred by</h4>
                                                        <h2><?php echo e($referdby->name); ?></h2>
                                                    </div>  
                                                <?php endif; ?>
                                            </div>
                                            
                                            <div>
                                                <h2>Referral Lists</h2>
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
                        <div class="col-md-4">
                            <?php echo $__env->make('user.include.sideaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>   
                    </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/referral.blade.php ENDPATH**/ ?>