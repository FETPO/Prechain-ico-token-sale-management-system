<div>
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
    <form wire:submit.prevent='transfer'>
        <div class="form-group">
            <label>User Email</label>
            <input type="email" wire:model='email' wire:keyup='validateentry' class="form-control" required>
            <small>Enter the email of the user you want to transfer your token to. The email must be registered in our system</small>
        </div>
        <div class="form-group">
            <label class="col-form-label">Enter Amount of <?php echo e($settings->token_symbol); ?> to transfer </label>
            <input type="number" wire:model='token' wire:keyup='validateentry' class="form-control" required>
        </div>
        <div class="form-group">
            <button wire:target='transfer' wire:loading.attr="disabled" wire:loading.class='bg-secondary' class='p-2 px-4 btn btn-primary' type="submit" <?php echo e($dis); ?>>
                <div wire:target='transfer' wire:loading class="sk-chase">
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                </div>
                <span wire:loading.remove wire:target='transfer'>Transfer Now</span> 
            </button>
        </div>
      </form>
</div>
<?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/livewire/transfer-token.blade.php ENDPATH**/ ?>