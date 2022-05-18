

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
                    <div class="p-3 card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="d-inline text-primary">Transaction Details > </h1><span> <?php echo e($txn->txn_id); ?></span>
                                    <div class="d-inline">
                                        <?php if($txn->status == "pending"): ?>
                                       <a href="<?php echo e(route('confirmtran', $txn->id)); ?>" class="float-right btn btn-success d-none d-md-block btn-sm "> Confirm </a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('canceltran', $txn->id)); ?>" class="float-right btn btn-sm text-white ml-2 redbtn">Delete</a>
                                        <a href="<?php echo e(route('admin.trx')); ?>" class="float-right btn btn-primary d-none d-md-block btn-sm"> <i class='fas fa-arrow-left'></i> <span class=""> Go Back</span></a>&nbsp;&nbsp;
                                        <a href="<?php echo e(route('admin.trx')); ?>" class="float-right btn btn-primary d-block d-md-none btn-sm"> <i class='fas fa-arrow-left'></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Transaction Date</h5>
                                    <p><?php echo e(\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction Status</h5>
                                    <?php if($txn->status == "pending"): ?>
                                    <p><span class="badge badge-danger redbtn"><?php echo e($txn->status); ?></span></p>
                                    <?php else: ?>
                                    <p><span class="badge badge-success"><?php echo e($txn->status); ?></span></p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction By</h5>
                                    <p><?php echo e($txn->tuser->name); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Transaction Review</h5>
                                    <?php if($txn->status == "pending"): ?>
                                    <p>Not Reviewed Yet</p>
                                    <?php else: ?>
                                    <p>Approved</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>TRANSACTION INFO</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Transaction Type</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->type); ?></h5>
                                </div>
                            </div>
                            <?php if($txn->type == "TRANSFER"): ?>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Transfer to </h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->address); ?></h5>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payment Method</h5>
                                </div>
                                <div class="col-md-8">
                                <h5><?php echo e($txn->to); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payable Amount</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->amount); ?></h5>
                                </div>
                            </div>  
                            <?php endif; ?>
                            <?php if($txn->type == "PURCHASE"): ?>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Payment Screenshot</h5>
                                </div>
                                <div class="col-md-8">
                                <h5> <a href="<?php echo e(route('upload.view', $txn->id)); ?>" class="btn btn-primary btn-sm"> <span class="">Screenshot</span></a></h5>
                                </div>
                            </div>  
                            <?php endif; ?>
                            
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Details</h5>
                                </div>
                                <div class="col-md-8">
                                    <?php if($txn->type == "TRANSFER"): ?>
                                    <h5>Tokens Transfered</h5>
                                    <?php else: ?>
                                    <h5>Tokens Purchase</h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($txn->type != "TRANSFER"): ?>
                              <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5><?php echo e($txn->tuser->name); ?> Wallet Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->tuser->wallet_type); ?></h5>
                                    <p><?php echo e($txn->tuser->wallet_address); ?></p>
                                </div>
                            </div>  
                            <?php endif; ?>
                            

                            <div class="mt-5 row">
                                <div class="col-md-12">
                                    <h5>TOKEN DETAILS</h5>
                                </div>
                            </div>
                            <?php if($txn->type != "TRANSFER"): ?>
                                <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Stage Name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->stage); ?></h5>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <?php if($txn->type == "TRANSFER"): ?>
                                    <h5>Amount in USD</h5>
                                    <?php else: ?>
                                      <h5>Contribution</h5>  
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="col-md-8">
                                   <h5> <?php echo e(number_format($txn->base_amt)); ?> USD</h5>
                                </div>
                            </div>
                            <?php if($txn->type != "TRANSFER"): ?>
                             <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Token Added To</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($txn->tuser->name); ?>

                                </h5>
                                </div>
                            </div>   
                            <?php endif; ?>
                            
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Token(T)</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e(number_format($txn->tokens)); ?> <?php echo e($settings->token_symbol); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Bonus Tokens (B)</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e(number_format($txn->token_bonus)); ?> <?php echo e($settings->token_symbol); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Total Token</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e(number_format($txn->total_token)); ?> <?php echo e($settings->token_symbol); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/transaction_details.blade.php ENDPATH**/ ?>