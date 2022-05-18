<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
    $bg="dark";
    $text = "light";
}
?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h2 class="text-<?php echo e($text); ?> pb-2">Welcome, <?php echo e(Auth('admin')->User()->name); ?>!</h2>
                </div>
                <?php if(Session::has('message')): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow card">
                            <div class="card-body">
                                <h3 class="card-category">TOKEN SALE - <?php echo e($stage->stage_name); ?></h3>
                                <h1 class="card-title"><?php echo e(number_format($tran)); ?> <span class="px-3 py-1 badge badge-info"><?php echo e($settings->token_symbol); ?></span></h4>
                                <span class="mr-2">Token-left: <?php echo e(number_format($stage->token_avail)); ?></span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shadow card">
                            <div class="card-body">
                                <h3 class="card-category">TOTAL USERS</h3>
                                <h1 class="card-title"><?php echo e(number_format($users)); ?><span class="px-3 py-1 badge badge-info"></span></h4>
                                <a href="<?php echo e(route('userlist')); ?>" class="float-right text-primary">View</a>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-white card bg-primary">
                            <div class="card-body">
                                <h3 class="text-white card-category">AMOUNT COLLECTED</h3>
                                <h1 class="text-white card-title"><?php echo e(number_format($usdamt, '2')); ?></h4>
                                    <span class="px-3 py-1 badge badge-dark">USD</span>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <span class="card-title">Recent Transaction</span>
                                <a href="<?php echo e(route('admin.trx')); ?>" class="float-right text-primary">View all</a> 
                                <div class="table-responsive"> 
                                    <table class="table"> 
                                        <thead> 
                                            <tr> 
                                                <th>TRANX NO.</th>
                                                <th>TOKENS</th>
                                                <th>AMOUNT</th>
                                                <th>BASE AMOUNT</th>
                                                <th>TYPE</th>
                                                <th>STATUS</th>
                                            </tr> 
                                        </thead> 
                                        <tbody> 
                                            <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $txn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr> 
                                                <td><?php echo e($txn->txn_id); ?></td> 
                                                <td><?php echo e($txn->tokens); ?> <?php echo e($settings->token_symbol); ?></td> 
                                                <td><?php echo e($txn->amount); ?> <?php echo e($txn->to); ?></td>
                                                <td><?php echo e($txn->base_amt); ?> USD</td> 
                                                <td><?php echo e($txn->type); ?></td>
                                                <td> <?php if($txn->status == "pending"): ?>
                                                    <p><span class="badge badge-danger"><?php echo e($txn->status); ?></span></p>
                                                    <?php else: ?>
                                                    <p><span class="badge badge-success"><?php echo e($txn->status); ?></span></p>
                                                    <?php endif; ?>
                                                </td>
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
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>