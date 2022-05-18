<x-jet-action-section>
    <x-slot name="title">
        
    </x-slot>

    <x-slot name="description">
        
    </x-slot>

    <x-slot name="content">
        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="max-w-xl mt-4 text-sm">
                    <p class="font-semibold">
                        {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="max-w-xl mt-4 text-sm">
                    <p class="font-semibold">
                        {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                    </p>
                </div>

                <div class="grid max-w-xl gap-1 px-4 py-4 mt-4 font-mono text-sm rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" class="btn btn-primary" wire:loading.attr="disabled">
                        {{ __('Enable 2FA') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3 btn btn-info">
                            {{ __('Regenerate Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Show Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled" class="btn btn-danger">
                        {{ __('Disable') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>