<h2 class="mb-2 d-inline">Add Referral Commission</h2>
<div>
    <form method="POST" action="<?php echo e(route('saverefcom')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Referral Commission(%)</label>
                <small>how many percent of <?php echo e($settings->token_symbol); ?></small>
                <input type="number" class="form-control"  value="<?php echo e($settings->ref_com); ?>" name="ref_com" required>
            </div>
        </div>
        <button type="submit" class="px-3 btn btn-primary">Update Commission</button>
    </form>  
</div><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/settings/referral.blade.php ENDPATH**/ ?>