

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
                                <span class="card-title">All KYC Application                                </span>
                                <a href="#" data-toggle="modal" data-target="#kycsett" class="float-right btn btn-primary"> <i class='fas fa-cog'></i> Kyc Settings</a>
                                <!-- Modal -->
                                <div class="modal fade" id="kycsett" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="mb-2 d-inline">Verification Settings</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="<?php echo e(route('savekycset')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('put'); ?>
                                                    <div class="mb-3 form-row">
                                                        <div class="mt-4 col-md-4">
                                                            <label>KYC Verification</label>
                                                            <div class="selectgroup">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="kycstat" value="on" <?php echo e($settings->kyc_verification == 'on' ? 'checked' : ''); ?> class="selectgroup-input">
                                                                    <span class="selectgroup-button">Enable</span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="kycstat" <?php echo e($settings->kyc_verification == 'off' ? 'checked' : ''); ?> value="off" class="selectgroup-input">
                                                                    <span class="selectgroup-button">Disable</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="px-4 btn btn-primary">save settings</button>
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive"> 
                                <table class="table" id="ttable"> 
                                    <thead> 
                                        <tr> 
                                            <th>USER.</th>
                                            <th>DOC TYPE</th>
                                            <th>DATE SUBMITED</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        <?php $__currentLoopData = $kycs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kyc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr> 
                                            <td><?php echo e($kyc->kuser->name); ?></td> 
                                            <td><?php echo e($kyc->doc_type); ?></td> 
                                            <td><?php echo e(\Carbon\Carbon::parse($kyc->created_at)->toDayDateTimeString()); ?></td>
                                            <td><?php echo e($kyc->status); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('viewkyc', $kyc->id)); ?>" class="m-1 btn btn-info btn-sm">View Details</a>
                                                <a href="<?php echo e(route('accept.ve', $kyc->id)); ?>" class="btn btn-success btn-sm">Accept</a>
											    <a href="<?php echo e(route('reject.ve', $kyc->id)); ?>" class="btn btn-warning btn-sm">Reject</a>
                                                <a href="<?php echo e(route('delete.ve', $kyc->id)); ?>" class="btn btn-danger btn-sm">Delete</a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/kyclist.blade.php ENDPATH**/ ?>