<div class="row">
    @if (empty(Auth::user()->wallet_address))
    <div class="col-12">
        <a href="#" data-toggle="modal" data-target="#walletmodal" class="text-white text-decoration-none">
            <div class="card bg-danger">
                <div class="card-body">
                    <span class="card-text">Add your wallet address before you buy</span>
                    <span class="float-right"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </a>
    </div> 
    @else
    <div class="col-12">
        <a href="#" data-toggle="modal" data-target="#walletmodal" class="text-white text-decoration-none">
            <div class="card bg-info">
                <div class="card-body">
                    <span class="card-text">Update your wallet address.</span>
                    <span class="float-right"><i class="fas fa-arrow-right"></i></span>
                </div>
            </div>
        </a>
    </div> 
    @endif
    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="p-3 col-12 col-stats">
                        <div class="numbers">
                            <h2 class="mb-3 card-category text-bold">Your Account Status</h2>
                            @if (Auth::user()->email_verified_at)
                            <a href="#" class="p-2 mr-2 btn btn-success btn-sm">Email Verified</a>
                            @else
                            <a href="#" class="p-2 mr-2 btn btn-sm text-white redbtn">Email not Verified</a>
                            @endif
                            @if (Auth::user()->verification_status != "Verified")
                            <a href="{{route('kycinfo')}}" class="p-2 btn btn-primary btn-sm">Submit Kyc</a>
                            @else
                            <a href='#' class="p-2 btn btn-success btn-sm">Kyc Verified</a>
                            @endif 
                            <h4 class="card-title text-{{$text}} mb-3"></h4>
                            <div class="mt-3">
                            <h2 class="mb-3 card-category text-bold">Receiving Wallet:</h2>
                            <span class="mr-2">
                                @if (Auth::user()->wallet_address)
                                    {{Auth::user()->wallet_address}} ({{Auth::user()->wallet_type}})
                                @else
                                    Address not added yet
                                @endif
                                
                            </span>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Earn with Referral</h5>
                <p class="card-text">Invite your friends & family.</p>
                <div class="mb-3 input-group">
                    <input type="text" class="form-control myInput readonly" value="{{Auth::user()->ref_link}}" id="myInput" readonly>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    @if (Auth::user()->verification_status != "Verified")
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Identity Verification - KYC</h5>
                    <p class="card-text">To comply with regulation, participant will have to go through identity verification. You have not submitted your documents to verify your identity (KYC).</p>
                    <div>
                        <a class="p-2 btn btn-outline-primary" href="{{route('kycapplication')}}">Click to Procced</a>
                    </div> 
                </div>
            </div>
        </div> 
    @endif
    
</div>