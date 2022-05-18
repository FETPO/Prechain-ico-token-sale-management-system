

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
                            <div class="row" x-data="{open: false, toggle() { this.open = ! this.open }}">
                                <div class="col-md-12">
                                    <h1 class="d-inline text-primary">KYC Information of
                                    </h1><span> <?php echo e($kyc->kuser->name); ?></span>
                                    <a href="<?php echo e(route('kyclist')); ?>" class="float-right btn btn-primary d-none d-md-block btn-sm"> <i class='fas fa-arrow-left'></i> <span class=""> Go Back</span></a>
                                    <a href="<?php echo e(route('kyclist')); ?>" class="float-right btn btn-primary d-block d-md-none btn-sm"> <i class='fas fa-arrow-left'></i> </a>
                                    <a href="<?php echo e(route('accept.ve', $kyc->id)); ?>" class="btn btn-primary btn-sm">Accept</a>
									<a href="<?php echo e(route('reject.ve', $kyc->id)); ?>" class="btn btn-danger btn-sm redbtn">Reject</a>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Submited By</h5>
                                    <p><?php echo e($kyc->kuser->name); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Submited On</h5>
                                    <?php echo e(\Carbon\Carbon::parse($kyc->created_at)->toDayDateTimeString()); ?>

                                </div>
                                <div class="col-md-3">
                                    <h5>Checked On</h5>
                                    <?php if($kyc->status == "pending"): ?>
                                    <p>Not reviewed yet</p>
                                    <?php else: ?>
                                    <p>Reviewed</p>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <?php if($kyc->status == "pending"): ?>
                                    <p><span class="badge badge-danger"><?php echo e($kyc->status); ?></span></p>
                                    <?php else: ?>
                                    <p><span class="badge badge-success">Approved</span></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>PERSONAL INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>First-name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->firstname); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Last-name</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->lastname); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->kuser->email); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->kuser->phone_number); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Date of Birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->dob); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Full Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($kyc->address); ?></h5>
                                </div>
                            </div>

                            <div class="mt-5 row">
                                <div class="col-md-12">
                                    <h5>UPLOADED DOCUMNETS</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Documents</h5>
                                </div>
                                <div class="col-md-3">
                                   <a href="<?php echo e(route('viewkycimg', $kyc->id)); ?>" class="btn btn-primary btn-sm"><span class="">View all</span></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/kyc_details.blade.php ENDPATH**/ ?>