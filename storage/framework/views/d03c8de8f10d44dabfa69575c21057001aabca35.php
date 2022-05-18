<!-- Deposit Modal -->
<div id="walletmodal" class="modal fade" role="dialog">
		<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Wallet Address</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <div class="p-4 modal-body">
                <form method="POST" action="<?php echo e(route('wallet.update')); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('put'); ?>
					<h3>Wallet Address</h3>
                    <p>In order to receive your <?php echo e($settings->token_symbol); ?> token, please select your wallet address and you have to put the address below input box. You will receive <?php echo e($settings->token_symbol); ?> token to this address after the token sale end.</p>
                    <div class="form-group">
                        <label class="col-form-label">Select Wallet</label>
                        <select class="form-control" name="wallet_type">
                            <option><?php echo e(Auth::user()->wallet_type); ?></option>
                            <option>Ethereum</option>
                            <option>Bitcoin</option>
                            <option>USDT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Enter your wallet address</label>
                          <input type="text" class="form-control" name="wallet_address" value="<?php echo e(Auth::user()->wallet_address); ?>" required>
                    </div>
                    <div class="mb-3">
                        <small>Note: Custom note or instruction for Wallet Address.</small> <br>
                        <small class='text-danger'><i class="fas fa-info-circle"></i> DO NOT USE your exchange wallet address OR if you don't have a private key of the your address. You WILL NOT receive your token and WILL LOSE YOUR FUNDS if you do.</small>
                    </div>
                    <button class='p-2 px-4 btn btn-primary' type="submit"> Add Wallet</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->




<!-- Deposit Modal -->
<div id="transfermodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tranfer your <?php echo e($settings->token_symbol); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="p-4 modal-body">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('transfer-token', [])->html();
} elseif ($_instance->childHasBeenRendered('GbYno6j')) {
    $componentId = $_instance->getRenderedChildComponentId('GbYno6j');
    $componentTag = $_instance->getRenderedChildComponentTagName('GbYno6j');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('GbYno6j');
} else {
    $response = \Livewire\Livewire::mount('transfer-token', []);
    $html = $response->html();
    $_instance->logRenderedChild('GbYno6j', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal --><?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/modal.blade.php ENDPATH**/ ?>