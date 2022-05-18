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
                    <div class="mt-5 row">
                       <div class="col-md-8 offset-md-2">
                            <div class="mb-4 text-center">
                                <h1>KYC Verification</h1>
                                <p>To comply with regulations each participant is required to go through identity verification (KYC/AML) to prevent fraud, money laundering operations, transactions banned under the sanctions regime or those which fund terrorism. Please, complete our fast and secure verification process to participate in token offerings.</p>
                            </div>

                            <div class="card">
                                <div class="p-3 py-5 text-center card-body">
                                    <div class="px-5">
                                    <div><i class="fas fa-copy fa-4x"></i> </div>
                                    </div>
                                    <h2>You have not submitted your necessary documents to verify your identity.</h2>
                                    <p>It would great if you please submit the form. If you have any question, please feel free to contact our support team.</p>
                                    <a class="p-2 btn btn-primary " href="<?php echo e(route('kycapplication')); ?>">Click here to complete your KYC</a>
                                </div>
                            </div>
                        </div>  
                    </div>
            </div>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/kycinfo.blade.php ENDPATH**/ ?>