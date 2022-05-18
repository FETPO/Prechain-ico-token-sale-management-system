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
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a href="#per" class="nav-link active" data-toggle="tab">Personal Data</a>
                                                </li>
                                                
                                                <li class="nav-item">
                                                    <a href="#pas" class="nav-link" data-toggle="tab">Password</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="per">
                                                    <form method="POST" action=<?php echo e(route('profile.update')); ?>>
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('put'); ?>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Fullname</label>
                                                                <input type="text" class="form-control" value="<?php echo e(Auth::user()->name); ?>" name="fullname">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Email Address</label>
                                                                <input type="email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" name="email">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Mobile Number</label>
                                                                <input type="text" class="form-control" value="<?php echo e(Auth::user()->phone_number); ?>" name="number">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Date of Birth</label>
                                                                <input type="date" value="<?php echo e(Auth::user()->dob); ?>" class="form-control"  name="dob">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Nationality</label>
                                                                <select class="form-control" name="nationality">
                                                                    <option selected><?php echo e(Auth::user()->nationality); ?></option>
                                                                    <option>Nigeria</option>
                                                                    <option>United State of America</option>
                                                                </select>
                                                            </div>
                                                            <?php if(Auth::user()->verification_status == "Verified"): ?>
                                                            <div class="form-group col-md-6">
                                                                <label>Address</label>
                                                                <textarea class="form-control" disabled>
                                                                    <?php echo e($address->address); ?>

                                                                </textarea>
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Profile</button>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="set">
                                                    <p>Profile tab content ...</p>
                                                </div>
                                                <div class="tab-pane fade" id="pas">
                                                    <form method="POST" action="<?php echo e(route('password.update')); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('put'); ?>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Old Password</label>
                                                                <input type="password" class="form-control" name="old_password">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>New Password</label>
                                                                <input type="password" class="form-control" name="password">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>Confirm New Password</label>
                                                                <input type="password" class="form-control" name="password_confirmation">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Update Password</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title">Two-Factor Verification</h3>
                                            <p class="card-text">Two-factor authentication is a method for protection of your account. When it is activated you are required to enter not only your password, but also a special code. You can receive this code in mobile app. Even if third party gets access to your password, they still won't be able to access your account without the 2FA code.</p>
                                            <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
                                                <div class="mt-2">
                                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.two-factor-authentication-form')->html();
} elseif ($_instance->childHasBeenRendered('8utiel9')) {
    $componentId = $_instance->getRenderedChildComponentId('8utiel9');
    $componentTag = $_instance->getRenderedChildComponentTagName('8utiel9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8utiel9');
} else {
    $response = \Livewire\Livewire::mount('profile.two-factor-authentication-form');
    $html = $response->html();
    $_instance->logRenderedChild('8utiel9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php echo $__env->make('user.include.sideaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>   
                    </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/profile/show.blade.php ENDPATH**/ ?>