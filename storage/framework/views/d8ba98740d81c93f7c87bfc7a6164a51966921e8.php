<div>
    <?php if(Session::has('message')): ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
</div><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/components/danger-alert.blade.php ENDPATH**/ ?>