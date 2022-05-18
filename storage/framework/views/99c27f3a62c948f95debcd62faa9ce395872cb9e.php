

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
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <h2 class="d-inline">Add New ICO/STO Stage</h2>
                                </div>
                                <div class="col-md-8 offset-md-2">
                                    <form method="POST" action="<?php echo e(route('addstage')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Stage Title/Name</label>
                                                <input type="text" class="form-control" name="stage_name" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label>Total Token Issues</label>
                                            <input type="text" class="form-control" name="token" required>
                                            <small>Define how many tokens available for sale on stage.</small>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label>Base Token Price</label>
                                            <input type="text" class="form-control" name="price" required>
                                            <small>Define your token rate. Usually USD per token.</small>
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label>Bonus</label>
                                            <input type="text" class="form-control" name="bonus" required>
                                          </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label>Min Per Transaction</label>
                                              <input type="text" class="form-control" name="min" required>
                                              <small>Purchase min amount of token per tranx.</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label>Max Per Transaction</label>
                                              <input type="text" class="form-control" name="max" required>
                                              <small>Purchase max amount of token per tranx.</small>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                              <label>Start Date</label>
                                              <input type="datetime-local" class="form-control" name="startdate" required>
                                              <small>Start date/time for sale. Can't purchase before time.</small>
                                            </div>
                                            <div class="form-group col-md-6">
                                              <label>End Date</label>
                                              <input type="datetime-local" class="form-control" name="enddate" required>
                                              <small>Finish date/time for sale. Can't purchase after time.</small>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Stage</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/newstage.blade.php ENDPATH**/ ?>