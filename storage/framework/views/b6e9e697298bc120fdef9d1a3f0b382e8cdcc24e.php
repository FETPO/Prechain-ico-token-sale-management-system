

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
    <div class="content">
        <div class="page-inner">
           <div class="mt-2 mb-5">
                <h1 class="title1 d-inline">KYC Documents</h1>
                <div class="d-inline">
                    <div class="float-right btn-group">
                        <a class="btn btn-primary btn-sm" href="<?php echo e(route('viewkyc', $kyc->id)); ?>"> <i class="fa fa-arrow-left"></i> back</a>
                    </div>
                </div>
            </div>
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
                            <h4>image(front)</h4>
                            <img src="<?php echo e(asset('storage/'. $kyc->doc1)); ?>" class="img-fluid w-75" alt="image-front">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>image(back)</h4>
                            <img src="<?php echo e(asset('storage/'. $kyc->doc2)); ?>" class="img-fluid w-75" alt="image-back">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Photograph</h4>
                            <img src="<?php echo e(asset('storage/'. $kyc->photo)); ?>" class="img-fluid w-75" alt="photograp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/kyc-images.blade.php ENDPATH**/ ?>