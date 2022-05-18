

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
                                <span class="card-title">Recent Transaction</span>
                                <a href="#" data-toggle="modal" data-target="#addtoken" class="float-right btn btn-primary"> <i class='fas fa-plus-circle'></i> Add Tokens</a>
                                <!-- Modal -->
                                <div class="modal fade" id="addtoken" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2 class="mb-2 d-inline">Manually Add Tokens</h2>
                                                <div>
                                                    <form method="POST" action="<?php echo e(route('addtoken')); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Tranx Type</label>
                                                                <select class="form-control" name="t_type">
                                                                    <option selected disabled>Select</option>
                                                                    <option>PURCHASE</option>
                                                                    <option>BONUS</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Tranx Date</label>
                                                                <input type="datetime-local" class="form-control" name="date" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Token Added To</label>
                                                                <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true" name="user">
                                                                    <option selected disabled>Select</option>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                       <option value='<?php echo e($user->id); ?>'><?php echo e($user->name); ?></option> 
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Token for Stage</label>
                                                                <select class="form-control" name="stage">
                                                                    <option selected disabled>Select</option>
                                                                    <?php $__currentLoopData = $stage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                       <option value='<?php echo e($stg->stage_name); ?>'><?php echo e($stg->stage_name); ?>

                                                                        <?php if($stg->status == "active"): ?>
                                                                            <span class="text-success">active</span>
                                                                        <?php endif; ?>
                                                                    </option> 
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Payment Gateway</label>
                                                                <select class="form-control" name="payment_mode">
                                                                    <option selected disabled>Select</option>
                                                                    <option>Paypal</option>
                                                                    <option>Manual</option>
                                                                    <option>Bitcoin</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Payment Amount</label>
                                                                <input type="number" class="form-control" name="amount">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Payment Address</label>
                                                                <input type="text" class="form-control" name="address" placeholder="Optional">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Number of Token</label>
                                                                <input type="number" class="form-control" name="tokens" required>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="px-3 btn btn-primary">Add Token</button>
                                                    </form>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive"> 
                                <table class="table" id="ttable"> 
                                    <thead> 
                                        <tr> 
                                            <th>TRANX NO.</th>
                                            <th>TOKENS</th>
                                            <th>AMOUNT</th>
                                            <th>BASE AMOUNT</th>
                                            <th>TYPE</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        <?php $__currentLoopData = $trxns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $txn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr> 
                                            <td><?php echo e($txn->txn_id); ?></td> 
                                            <td><?php echo e($txn->tokens); ?> <?php echo e($settings->token_symbol); ?></td> 
                                            <td><?php echo e($txn->amount); ?> <?php echo e($txn->to); ?></td>
                                            <td><?php echo e($txn->base_amt); ?> USD</td> 
                                            <td><?php echo e($txn->type); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($txn->created_at)->toDayDateTimeString()); ?></td>
                                            <td> <?php if($txn->status == "pending"): ?>
                                                <p><span class="badge badge-danger redbtn"><?php echo e($txn->status); ?></span></p>
                                                <?php else: ?>
                                                <p><span class="badge badge-success"><?php echo e($txn->status); ?></span></p>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('viewtransaction', $txn->id)); ?>" class="m-1 btn btn-info btn-sm">View Details</a>
                                                
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/transactions.blade.php ENDPATH**/ ?>