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
                    <div class="row">
                       <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="mb-2">
                                                <div>
                                                   <h2>Stake your Token</h2> 
                                                </div>
                                                <div class="p-3 shadow-lg">
                                                    <?php if(!$mystake): ?>
                                                        <div class="d-inline">
                                                            <span class="text-danger">Minimum Amount:</span> <span><?php echo e($settings->minstake . ' '. $settings->token_symbol); ?></span>
                                                        </div> &nbsp; &nbsp;
                                                        <div class="d-inline">
                                                            <span class="text-danger">Maximum Amount:</span> <span><?php echo e($settings->maxstake . ' '. $settings->token_symbol); ?></span> 
                                                        </div>&nbsp; &nbsp;
                                                        
                                                        <div class="mt-4">
                                                            <form action="<?php echo e(route('stakenow')); ?>" method="post" class="form-inline">
                                                                <?php echo csrf_field(); ?>
                                                                <select name="duration" id="dura" class="form-control" onchange="calcAmount(this)">
                                                                    <?php if(in_array("onem", $duraarray)): ?>
                                                                      <option>1 Month</option>  
                                                                    <?php endif; ?>
                                                                    <?php if(in_array("fourm", $duraarray)): ?>
                                                                      <option>4 Months</option>  
                                                                    <?php endif; ?>
                                                                    <?php if(in_array("sixm", $duraarray)): ?>
                                                                      <option>6 Months</option>  
                                                                    <?php endif; ?>
                                                                    <?php if(in_array("ninem", $duraarray)): ?>
                                                                      <option>9 Months</option>  
                                                                    <?php endif; ?>
                                                                    <?php if(in_array("oney", $duraarray)): ?>
                                                                      <option>1 Year</option>  
                                                                    <?php endif; ?>
                                                                </select>
                                                                <input type="text" id="exroi" value="<?php echo e($settings->roi); ?>" class="form-control" readonly>

                                                                <input type="hidden" name="roiexpected" id="exroireal">
                                                                <input type="number" name="amount" min="<?php echo e($settings->minstake); ?>" placeholder="Amount" max="<?php echo e($settings->maxstake); ?>"  class="form-control" required>
                                                                <button type="submit" class="px-4 btn btn-primary">Stake</button>
                                                            </form>
                                                        </div>  
                                                    <?php else: ?>
                                                       <div>
                                                        <h4>Your Stake is currenly <?php if($mystake->status == 'active'): ?>
                                                            <span class="badge badge-success">Active</span>
                                                            <?php else: ?>
                                                            <span class="badge badge-danger">Expired</span>
                                                            <?php endif; ?></h4>
                                                        <h4>Amount on Stake: <span class="text-primary"><?php echo e($mystake->amount); ?> <?php echo e($settings->token_symbol); ?></span> </h4>
                                                        <h4>Date Started: <span class="text-primary"><?php echo e(\Carbon\Carbon::parse($mystake->created_at)->toDayDateTimeString()); ?></span> </h4>
                                                        <h4>Expiring Date: <span class="text-primary"><?php echo e(\Carbon\Carbon::parse($mystake->expire_date)->toDayDateTimeString()); ?></span> </h4>
                                                       
                                                        <div class="mt-2">
                                                          <a href="<?php echo e(route('cancelstake',$mystake->id)); ?>" class="px-4 btn btn-danger btn-sm">Cancel Stake</a>  
                                                        </div>
                                                        
                                                    </div> 
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4">
                                                <h2>ROI LOG</h2>
                                                <div class="table-responsive"> 
                                                    <table class="table" id="ttable"> 
                                                        <thead> 
                                                            <tr> 
                                                                <th>TOKEN RECEIVED</th>
                                                                <th>NARRATION</th>
                                                                <th>DATE</th>
                                                            </tr> 
                                                        </thead> 
                                                        <tbody> 
                                                            <?php $__currentLoopData = $rois; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr> 
                                                                    <td><?php echo e(number_format($profit->amount, '2', '.', ',')); ?> <?php echo e($settings->token_symbol); ?></td> 
                                                                    <td><?php echo e($profit->narration); ?></td> 
                                                                    <td><?php echo e(\Carbon\Carbon::parse($profit->created_at)->toDayDateTimeString()); ?></td>
                                                                </tr>   
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        </tbody> 
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php echo $__env->make('user.include.sideaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>   
                    </div>
                    <!-- /plans Modal -->
                <script type="text/javascript">
                    var amount = document.getElementById('exroi');
                    var amountpay = document.getElementById('exroireal');
                    amount.value = "<?php echo e($settings->one_month_roi); ?>"+ '%';
                    amountpay.value = "<?php echo e($settings->one_month_roi); ?>";
                    function calcAmount(sub) {
                        if(sub.value=="1 Month"){
                            
                            amount.value = "<?php echo e($settings->one_month_roi); ?>"+ '%';
                            amountpay.value = "<?php echo e($settings->one_month_roi); ?>";
                        }if(sub.value=="4 Months"){
                           
                            amount.value = "<?php echo e($settings->four_month_roi); ?>"+ '%';
                            amountpay.value = "<?php echo e($settings->four_month_roi); ?>";
                        }if(sub.value=="6 Months"){
                           
                            amount.value = "<?php echo e($settings->six_month_roi); ?>"+ '%';
                            amountpay.value = "<?php echo e($settings->six_month_roi); ?>";
                        }
                        if(sub.value=="9 Months"){
                           
                            amount.value = "<?php echo e($settings->nine_month_roi); ?>"+ '%';
                            amountpay.value = "<?php echo e($settings->nine_month_roi); ?>";
                        }
                        if(sub.value=="1 Year"){
                            
                            amount.value = "<?php echo e($settings->one_year_roi); ?>"+ '%';
                            amountpay.value = "<?php echo e($settings->one_year_roi); ?>";
                        }
                    }
                </script>
            </div>
            <?php echo $__env->make('user.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

   
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/user/staketoken.blade.php ENDPATH**/ ?>