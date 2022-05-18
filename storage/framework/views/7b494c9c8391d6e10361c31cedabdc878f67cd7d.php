

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel ">
            <div class="content ">
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
                       <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Transactions list</h5>
                                    <div class="table-responsive"> 
                                        <table class="table" id="ttable"> 
                                            <thead> 
                                                <tr> 
                                                    <th>TRANX NO.</th>
                                                    <th>TOKENS</th>
                                                    <th>AMOUNT</th>
                                                    <th>USD AMOUNT</th>
                                                    <th>TYPE</th>
                                                    <th>DATE</th>
                                                    <th>STATUS</th>
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <?php $__currentLoopData = $recent_txn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $txn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <tr> 
                                                    <td><?php echo e($txn->txn_id); ?></td>
                                                    <td><?php echo e($txn->tokens); ?> <?php echo e($settings->token_symbol); ?></td> 
                                                    <td><?php echo e($txn->amount); ?> <?php echo e($txn->to); ?></td>
                                                    <td><?php echo e($txn->base_amt); ?> USD</td>
                                                    <td><?php echo e($txn->type); ?></td>
                                                    <td><?php echo e(\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()); ?></td>
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
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/transactions.blade.php ENDPATH**/ ?>