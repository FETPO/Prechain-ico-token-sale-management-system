<x-guest-layout>
      <x-slot name="title">
        Two Factor Authentication
    </x-slot>
    <div x-data="{ recovery: false }">
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                        
                        <div class="text-center mb-4">
                            <p class="text-white"> 
                             {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                            </p>
                            
                        </div>
                        
                        <x-jet-validation-errors class="mb-4" />
                        
                        
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3"> Two Factor Authentication</h1>
                            <form method="POST" action="{{ route('two-factor.login') }}" class="mt-5 card__form">
                            @csrf
                            
                                <div class="mt-4" x-show="! recovery">
                                    <div class="form-group">
                                        <x-jet-label for="code" value="{{ __('Code') }}" />
                                        <x-jet-input id="code" class="form-control" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                                    </div>
                                </div>

                                <div class="mt-4" x-show="recovery"> 
                                    <div class="form-group">
                                        <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                                        <x-jet-input id="recovery_code" class="form-control" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                                    </div>
                                </div>
                            
                                <div class="flex items-center justify-end mt-4">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-info mt-4"
                                        x-show="! recovery"
                                        x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                                            {{ __('Use a recovery code') }}
                                        </button>

                                        <button type="button" class="btn btn-secondary mt-4"
                                        x-show="recovery"
                                        x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                                            {{ __('Use an authentication code') }}
                                        </button>

                                        <x-jet-button class="btn btn-primary mt-4">
                                            {{ __('Log in') }}
                                        </x-jet-button>
                                    </div>
                            
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> 
</x-guest-layout>