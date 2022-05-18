<div>
    <x-danger-alert/>
    <x-success-alert/>
    <form wire:submit.prevent='transfer'>
        <div class="form-group">
            <label>User Email</label>
            <input type="email" wire:model='email' wire:keyup='validateentry' class="form-control" required>
            <small>Enter the email of the user you want to transfer your token to. The email must be registered in our system</small>
        </div>
        <div class="form-group">
            <label class="col-form-label">Enter Amount of {{$settings->token_symbol}} to transfer </label>
            <input type="number" wire:model='token' wire:keyup='validateentry' class="form-control" required>
        </div>
        <div class="form-group">
            <button wire:target='transfer' wire:loading.attr="disabled" wire:loading.class='bg-secondary' class='p-2 px-4 btn btn-primary' type="submit" {{$dis}}>
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
