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
                    <?php if($userkyc && $userkyc->status == "pending"): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <i class="fa fa-info-circle"></i>
                                Your submission is under review, you will be notified if your verification is successfull or not.
                            </div>
                        </div>
                    </div>
                    <?php elseif($userkyc && $userkyc->status == "Verified"): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissable">
                                <i class="fa fa-info-circle"></i>
                                Your Account have been successfully verified.
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="mt-2 row">
                       <div class="col-md-8 offset-md-2">
                            <div class="mb-4 text-center">
                                <h1>Begin your ID-Verification</h1>
                                <p>Verify your identity to participate in token sale.</p>
                            </div>

                            <div class="card">
                                <div class="p-3 py-5 card-body">
                                    <form method="POST" action="<?php echo e(route('submitkyc')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Firstname</label>
                                                <input type="text" class="form-control" name="firstname" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Lastname</label>
                                                <input type="text" class="form-control" name="lastname" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date of birth</label>
                                                <input type="date" class="form-control" name="dob"required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Gender</label>
                                                <select class="form-control" name="gender" required>
                                                    <option selected disabled>Choose...</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Full Address</label>
                                                <input type="text" class="form-control" placeholder="country, state, city, street, postal code" name="address" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Document Type</label>
                                                <select class="form-control" name="doc_type" required>
                                                    <option selected disabled>Choose...</option>
                                                    <option>Drivers Licence</option>
                                                    <option>Nataional ID</option>
                                                    <option>Passport</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Document Upload (Front)</label>
                                                <input type="file" class="form-control" name="doc1" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Document Upload (Back)</label>
                                                <input type="file" class="form-control" name="doc2" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Photo Proof(Face)</label>
                                                <input type="file" class="form-control" name="photo" required>
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" name="userid" value="<?php echo e(Auth::user()->id); ?>">
                                        <?php if($userkyc && $userkyc->status == "pending"): ?>
                                            <button type="submit" class="btn btn-primary" disabled>Submit for Verification</button>
                                        <?php elseif($userkyc && $userkyc->status == "Verified"): ?>
                                        <button type="submit" class="btn btn-success" disabled>Account Verified</button>
                                        <?php else: ?>
                                             <button type="submit" class="btn btn-primary">Submit for Verification</button>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
            </div>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/kyc.blade.php ENDPATH**/ ?>