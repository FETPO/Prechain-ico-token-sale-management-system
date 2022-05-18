<div class="">

</div>
<h2 class="d-inline">Staking Settings</h2>
<div>
    <form method="POST" action="<?php echo e(route('savestakeset')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-row">
            <div class="form-group col-12 ">
                <h5>Allow users to stake</h5>
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="usestatke" id="social" value="1" class="selectgroup-input" checked="">
                        <span class="selectgroup-button">Yes</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="usestatke" id="socialoff" value="0" class="selectgroup-input">
                        <span class="selectgroup-button">No</span>
                    </label>
                </div>
                <div>
                    <small>If set to No, your users will not be able to stake their token</small> 
                </div>
            </div>
            <?php if($settings->usestake): ?>
            <script>document.getElementById("social").checked= true;</script>
            <?php else: ?>
            <script>document.getElementById("socialoff").checked= true;</script>
            <?php endif; ?>
            
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Minimun Amount of <?php echo e($settings->token_symbol); ?> to Stake</label>
                <input type="number" class="form-control" name="minstake" value="<?php echo e($settings->minstake); ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label>Maximum amount of <?php echo e($settings->token_symbol); ?> to stake</label>
                <input type="number" class="form-control" name="maxstake" value="<?php echo e($settings->maxstake); ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="onem" value="onem">
                <label>1 Month</label>
            </div>
            <div class="form-group col-md-6">
                
                <input type="number" class="form-control" name="onem" value="<?php echo e($settings->one_month_roi); ?>" required>
                <small>Total ROI for 1 Month duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="fourm" value="fourm">
                <label>4 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="fourm" value="<?php echo e($settings->four_month_roi); ?>" required>
                <small>Total ROI for 4 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="sixm" value="sixm">
                <label>6 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="sixm" value="<?php echo e($settings->six_month_roi); ?>" required>
                <small>Total ROI for 6 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="ninem" value="ninem">
                <label>9 Months</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="ninem" value="<?php echo e($settings->nine_month_roi); ?>" required>
                <small>Total ROI for 9 Months duration(%)</small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="duration[]" id="oney" value="oney">
                <label>1 Year</label>
            </div>
            <div class="form-group col-md-6">
                <input type="number" class="form-control" name="oneyear" value="<?php echo e($settings->one_year_roi); ?>" required>
                <small>Total ROI for 1 Year duration(%)</small>
            </div>
        </div>
        <button type="submit" class="px-4 btn btn-primary">Save</button>
    </form>  
</div>
<?php if(in_array("onem", $duraarray)): ?>
<script>document.getElementById("onem").checked= true;</script>
<?php endif; ?>
<?php if(in_array("fourm", $duraarray)): ?>
<script>document.getElementById("fourm").checked= true;</script>
<?php endif; ?>
<?php if(in_array("sixm", $duraarray)): ?>
<script>document.getElementById("sixm").checked= true;</script>
<?php endif; ?>
<?php if(in_array("ninem", $duraarray)): ?>
<script>document.getElementById("ninem").checked= true;</script>
<?php endif; ?>
<?php if(in_array("oney", $duraarray)): ?>
<script>document.getElementById("oney").checked= true;</script>
<?php endif; ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/admin/settings/staking.blade.php ENDPATH**/ ?>