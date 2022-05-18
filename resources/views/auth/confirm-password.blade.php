<x-guest-layout>
        <x-slot name="title">
        Confirm your password
    </x-slot>
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                         <x-jet-validation-errors class="alert alert-danger alert-dismissible fade show mb-2" />
                        
                        <div class="text-center mb-4 text-white">
                            <p> {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
                            
                        </div>
                        
                        
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3"> Admin Login</h1>
                            <form method="POST" action="{{ route('password.confirm') }}" class="mt-5 card__form">
                            @csrf
                
                                
                    
                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Enter Password" />
                                </div>
                    
                               
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                       { __('Confirm') }}
                                        </x-jet-button>
                                    </div>
                                
                               
                                
                            </form>
                           
                        </div>
                       
                        
        
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>





