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
} elseif ($_instance->childHasBeenRendered('1ERehDF')) {
    $componentId = $_instance->getRenderedChildComponentId('1ERehDF');
    $componentTag = $_instance->getRenderedChildComponentTagName('1ERehDF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1ERehDF');
} else {
    $response = \Livewire\Livewire::mount('buy-token', []);
    $html = $response->html();
    $_instance->logRenderedChild('1ERehDF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/buytoken.blade.php ENDPATH**/ ?>