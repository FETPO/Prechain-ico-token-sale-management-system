<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($demo->greeting); ?>


<?php echo $demo->message; ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/emails/newmail.blade.php ENDPATH**/ ?>