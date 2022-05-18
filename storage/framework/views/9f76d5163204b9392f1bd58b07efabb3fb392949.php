

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
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="d-inline text-primary">User Details</h1><span></span>
                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">
                                                <a href="#" data-toggle="modal" data-target="#sendmail" class="dropdown-item" type="button"> Send Email </a>
                                                <a href="<?php echo e(route('useractivity', $user->id)); ?>" class="dropdown-item" type="button">Activity</a>
                                                <a href="<?php echo e(route('userreferral', $user->id)); ?>" class="dropdown-item" type="button">Referral</a>
                                                <a href="" data-toggle="modal" data-target="#resetpswdModal" class="dropdown-item" type="button">Reset Password</a>
                                                <?php if($user->acnt_status==NULL || $user->acnt_status=='suspend'): ?>
												<a href="<?php echo e(route('unsuspend', $user->id)); ?>" class="dropdown-item" type="button">Unsuspend</a>
                                                <?php else: ?>
                                                <a href="<?php echo e(route('suspend.user', $user->id)); ?>" class="dropdown-item" type="button">Suspend</a>
                                                <?php endif; ?>
                                                <a href="" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" type="button">Delete User</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row">
                                <div class="col-md-3">
                                    <h5>Token Balance</h5>
                                    <p><?php echo e(number_format($user->tot_tk_bal, '2', '.', ','). ' '. $settings->token_symbol); ?></p>
                                    
                                </div>
                                <div class="col-md-3">
                                    <h5>Contributed</h5>
                                    <p><?php echo e($user->token_bal * $settings->amt_usd); ?> USD</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>User Account Status</h5>
                                    <?php if($user->acnt_status == "suspend"): ?>
                                    <span class="badge badge-danger">Suspended</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">Active</span>
                                    <?php endif; ?>
                                </div>
                                <div class="col-md-3">
                                    <h5>KYC</h5>
                                    <?php if($user->verification_status == "Not Verified"): ?>
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">Verified</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mt-3 row">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->name); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->email); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->phone_number); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Date of birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->dob); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e($user->nationality); ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Wallet Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php if($user->wallet_address): ?>
                                    <?php echo e($user->wallet_address); ?>

                                   <?php else: ?>
                                   Not added yet!
                                   <?php endif; ?></h5>
                                </div>
                            </div>
                            <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Joined</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5><?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reset user password Modal -->
    <div id="resetpswdModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to reset password for <?php echo e($user->name); ?> to <span class="text-primary font-weight-bolder">user01236</span></p>
                    <a class="btn btn-primary" href="<?php echo e(route('resetpassword', $user->id)); ?>">Reset Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Reset user password Modal -->

     <!-- Delete user Modal -->
     <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?php echo e($user->name); ?></strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="p-3 modal-body">
                    <p>Are you sure you want to delete <?php echo e($user->name); ?></p>
                    <a class="btn btn-danger" href="<?php echo e(route('deleteuser', $user->id)); ?>">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal -->

    <!-- send a single user email Modal-->
    <div id="sendmail" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Email Message</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>This message will be sent to <?php echo e($user->name); ?></p>
                    <form  method="post" action="<?php echo e(route('sendmail')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Email Subject</label>
                                <input type="text" class="form-control" placeholder="Email Subject" name="subject" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Email Greeting</label>
                                <input type="text" class="form-control" placeholder="Email Greeting" name="greeting" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea placeholder="Type your message here" class="form-control" name="message" row="4" required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                               <button class="px-5 btn btn-success" type="submit"> Send </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/useractions.blade.php ENDPATH**/ ?>