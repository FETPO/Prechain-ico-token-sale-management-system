

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <?php if (isset($component)) { $__componentOriginalb5cdbe3a1bc3848636cb76bad87486f6477a292c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorAlert::class, []); ?>
<?php $component->withName('error-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalb5cdbe3a1bc3848636cb76bad87486f6477a292c)): ?>
<?php $component = $__componentOriginalb5cdbe3a1bc3848636cb76bad87486f6477a292c; ?>
<?php unset($__componentOriginalb5cdbe3a1bc3848636cb76bad87486f6477a292c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5 row">
                                <div class="col-md-12">
                                    <h2 class="d-inline">Make Payment</h2>
                                    <a href="<?php echo e(route('cancelpayment')); ?>" class="float-right btn btn-danger btn-sm">Cancel</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div>
                                        <p>You have chosen to pay with <?php echo e($payment_mode); ?></p>
                                        <h2><?php echo e($payment_mode); ?> DETAILS</h2>
                                        <?php if($payment_mode == "BTC"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="<?php echo e($pay_info->address); ?>" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> <?php echo e($pay_info->networkmode); ?></p>
                                        </div>   
                                        <?php endif; ?>
                                        <?php if($payment_mode == "LTC"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="<?php echo e($pay_info->address); ?>" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> <?php echo e($pay_info->networkmode); ?></p>
                                        </div>    
                                        <?php endif; ?>
                                        <?php if($payment_mode == "ETH"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="<?php echo e($pay_info->address); ?>" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> <?php echo e($pay_info->networkmode); ?></p>
                                        </div>   
                                        <?php endif; ?>
                                        <?php if($payment_mode == "USDT"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> Address Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 input-group">
                                            <input type="text" class="form-control myInput readonly" id="myInput" value="<?php echo e($pay_info->address); ?>" readonly>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </div>  
                                        <div class="">
                                            <p> <strong>Network Mode:</strong> <?php echo e($pay_info->networkmode); ?></p>
                                        </div>    
                                        <?php endif; ?>
                                        <?php if($payment_mode == "USD"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> account details Below and upload a proof of payment afterwards </p>  
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="<?php echo e($pay_info->bankname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="<?php echo e($pay_info->acntname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="<?php echo e($pay_info->acntnum); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="<?php echo e($pay_info->swcode); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($payment_mode == "EUR"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> account details Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="<?php echo e($pay_info->bankname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="<?php echo e($pay_info->acntname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="<?php echo e($pay_info->acntnum); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="<?php echo e($pay_info->swcode); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <?php endif; ?>
                                        <?php if($payment_mode == "GBP"): ?>
                                        <div>
                                            <p>Please send <?php echo e($amount); ?> <?php echo e($payment_mode); ?> to the <?php echo e($payment_mode); ?> account details Below and upload a proof of payment afterwards </p> 
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Bank</label>
                                            <input type="text" value="<?php echo e($pay_info->bankname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>  
                                        <div class="mb-3 form-group">
                                            <label>Account Name</label>
                                            <input type="text" value="<?php echo e($pay_info->acntname); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div> 
                                        <div class="mb-3 form-group">
                                            <label>Account Number</label>
                                            <input type="text" value="<?php echo e($pay_info->acntnum); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>
                                        <div class="mb-3 form-group">
                                            <label>Swift Code</label>
                                            <input type="text" value="<?php echo e($pay_info->swcode); ?>" class="form-control myInput readonly" id="myInput" readonly>
                                        </div>   
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 row">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Payment Completed
                                      </button>
                                      <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <h3>Are you sure you have completed the payment?</h3>
                                                        <form method="POST" action="<?php echo e(route('completepayment')); ?>" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="mb-3 form-group">
                                                                <label>Please upload screenshot of payment as proof</label>
                                                                <input type="file" class="form-control" required name="proof">
                                                            </div>  
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Completed</button>
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
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/payment.blade.php ENDPATH**/ ?>