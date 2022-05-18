<x-guest-layout>
     <x-slot name="title">
       Reset your password
    </x-slot>
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                         
                        
    
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3">  Reset your password</h1>
                            <form method="POST" action="{{ route('password.update') }}" class="mt-5 card__form">
                            @csrf
                
                                
                    
                               <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                                </div>
                                
                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>
                                
                                <div class="form-group">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                    
                               
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                       {{ __('Reset Password') }}
                                        </x-jet-button>
                                    </div>
                                
                               
                                
                            </form>
                           
                        </div>
                       
                        
        
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>





