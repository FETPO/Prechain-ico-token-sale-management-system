<div class="md:grid md:grid-cols-3 md:gap-6" <?php echo e($attributes); ?>>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-title','data' => []]); ?>
<?php $component->withName('jet-section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title'); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
         <?php $__env->slot('description'); ?> <?php echo e($description); ?> <?php $__env->endSlot(); ?>
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <div class="">
        <div class="shadow-none">
            <?php echo e($content); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/vendor/jetstream/components/action-section.blade.php ENDPATH**/ ?>