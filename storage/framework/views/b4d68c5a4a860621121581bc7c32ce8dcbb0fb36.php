
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
                            <div class="card-body" x-data="{ isopen: false, toggle() { this.isopen = !this.isopen } }">
                                <div class="mb-5">
                                    <div>
                                        <span class="card-title">All User List</span>
                                        <a href="#" data-toggle="modal" data-target="#sendmailModal"
                                            class="btn btn-secondary btn-sm float-left mr-2">Send Message</a>
                                        <!-- send all users email -->
                                        <div id="sendmailModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header ">
                                                        <h4 class="modal-title ">This message will
                                                            be sent to all your users.</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.send-message-all', [])->html();
} elseif ($_instance->childHasBeenRendered('2yG25RS')) {
    $componentId = $_instance->getRenderedChildComponentId('2yG25RS');
    $componentTag = $_instance->getRenderedChildComponentTagName('2yG25RS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2yG25RS');
} else {
    $response = \Livewire\Livewire::mount('admin.send-message-all', []);
    $html = $response->html();
    $_instance->logRenderedChild('2yG25RS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /send all users email Modal -->
                                    </div>

                                    <a href="#" data-toggle="modal" data-target="#adduser"
                                        class="float-right btn btn-primary"> <i class='fas fa-plus-circle'></i> Add User</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="adduser" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="mb-2 d-inline">Manually Add Users</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <form method="POST" action="<?php echo e(route('adduser')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-12">
                                                                    <label>Username</label>
                                                                    <input type="text" class="form-control"
                                                                        name="username" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Fullname</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Email</label>
                                                                    <input type="email" class="form-control" name="email"
                                                                        required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password" required>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label>Confirm Password</label>
                                                                    <input type="password" class="form-control"
                                                                        name="password_confirmation" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="px-4 btn btn-primary">Add
                                                                User</button>
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
                                                <th>USER</th>
                                                <th>EMAIL</th>
                                                <th>TOKENS</th>
                                                <th>ACCOUNT STATUS</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->token_bal); ?> <?php echo e($settings->token_symbol); ?></td>
                                                    <td><?php echo e($user->acnt_status); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('viewuser', $user->id)); ?>"
                                                            class="m-1 btn btn-primary btn-sm">View Details</a>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/userslist.blade.php ENDPATH**/ ?>