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
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('buy-token', [])->html();
} elseif ($_instance->childHasBeenRendered('9qV1RCh')) {
    $componentId = $_instance->getRenderedChildComponentId('9qV1RCh');
    $componentTag = $_instance->getRenderedChildComponentTagName('9qV1RCh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9qV1RCh');
} else {
    $response = \Livewire\Livewire::mount('buy-token', []);
    $html = $response->html();
    $_instance->logRenderedChild('9qV1RCh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/buytoken.blade.php ENDPATH**/ ?>