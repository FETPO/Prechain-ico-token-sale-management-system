

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
                                        <h2 class="d-inline">Available ICO/STO Stage</h2>
                                        <a href="<?php echo e(route('newstage')); ?>" class="float-right btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add New Stage</a>
                                    </div>
                                    <?php $__currentLoopData = $stages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="p-1 border rounded shadow-none card position-relative" x-data="{open: false, toggle() { this.open = ! this.open }}">
                                            <div class="p-3">
                                              <h3 class="card-category d-inline"><?php echo e($stage->stage_name); ?>

                                                <?php if($stage->status == "active" && $stage->sales == "on"): ?>
                                                <span class="px-3 py-1 badge badge-success">RUNNING</span>
                                                <?php elseif($stage->status == "active" && $stage->sales != "on"): ?>
                                                <span class="px-3 py-1 badge badge-warning">PAUSED</span>
                                                <?php else: ?>
                                                <span class="px-3 py-1 badge badge-danger">EXPIRED</span>
                                                <?php endif; ?> 
                                              </h3> 
                                              <?php if($stage->status == "active"): ?>
                                                  <a class="float-right cursor" @click="toggle()" @click.away = "open = false"><i class="fas fa-ellipsis-v"></i></a>
                                              <?php endif; ?>
                                              
                                            </div>
                                            <div class="mt-2 shadow-sm bg-light w-75 position-absolute" x-show="open">
                                                <ul class="animated fadeIn" id="planid">
                                                    
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo e(route('edit.stage', $stage->id)); ?>">UPDATE STAGE</a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    
                                                    <?php if($stage->sales != "on"): ?>
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo e(route('resumesales', $stage->id)); ?>">RESUME SALES</a>
                                                    </li>
                                                    
                                                    <div class="dropdown-divider"></div>
                                                    <?php else: ?>
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo e(route('pausesales', $stage->id)); ?>">PAUSE SALES</a>
                                                    </li>
                                                    <div class="dropdown-divider"></div>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                            <div class="p-2 mt-2 text-center">
                                                <small>Token Issued:</small>
                                                <h1 class='text-primary'><?php echo e($stage->token); ?></h1>
                                                <small>Available: <?php echo e($stage->token_avail); ?> Tokens</small> 
                                            </div>
                                            <hr>
                                            <div class="p-4 row">
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Base Price</p>
                                                    <h1 class='p-0 m-0 text-primary d-inline'><?php echo e($stage->price); ?></h1>
                                                    <small>USD</small>
                                                </div>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Base Bonus</p>
                                                    <h1 class='p-0 m-0 text-primary d-inline'><?php echo e($stage->bonus); ?></h1>
                                                    <small>USD</small>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class='p-3 row'>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">Start Date</p>
                                                    <h5 class='p-0 m-0 d-inline'><?php echo e(\Carbon\Carbon::parse($stage->start_date)->toDayDateTimeString()); ?></h5>
                                                </div>
                                                <div class="col-6">
                                                    <p class="p-0 m-0">End Date</p>
                                                    <h5 class='p-0 m-0 d-inline'><?php echo e(\Carbon\Carbon::parse($stage->end_date)->toDayDateTimeString()); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/stages.blade.php ENDPATH**/ ?>