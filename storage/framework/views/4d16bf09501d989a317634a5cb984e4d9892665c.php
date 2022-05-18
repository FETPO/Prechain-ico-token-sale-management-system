<div>
    <?php if(Session::has('success')): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> <?php echo e(Session::get('success')); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
</div><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/components/success-alert.blade.php ENDPATH**/ ?>