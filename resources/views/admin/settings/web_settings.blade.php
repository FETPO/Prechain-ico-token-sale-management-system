<h2 class="d-inline">Website Settings</h2>
<div>
    <form method="POST" action="{{route('savewebsettings')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Site Name</label>
                <input type="text" class="form-control" name="site_name" value="{{$settings->site_name}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Site Email</label>
                <input type="text" class="form-control" name="email" value="{{$settings->site_email}}" required>
            </div>
            <div class="form-group col-md-6">
                <label>Site Contact Address</label>
                <input type="text" class="form-control" name="address" value="{{$settings->address}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Site URL</label>
                <input type="text" class="form-control" name="url" value="{{$settings->site_url}}" required>
            </div>
            <div class="form-group col-md-6">
                <label>Site Phone Number</label>
                <input type="text" class="form-control" name="phone" value="{{$settings->phone}}" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>WhitePaper Description</label>
                <textarea name="whitepaper" class="form-control">{{$settings->whitepaper}}</textarea>
            </div>
            {{-- <div class="form-group col-md-6">
                <label>Annoucement</label>
                <input type="text" class="form-control" value="{{$settings->annoucement}}" name="annoucement">
            </div> --}}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Live-Chat</label>
                <textarea name="livechat" class="form-control">{{$settings->livechat}}</textarea>
            </div>
            <div class="form-group col-md-6">
                <label>Installation Type</label>
                <select name="install_type" class="form-control">
                    <option >{{$settings->install_type}}</option>
                    <option>Main-Domain</option>
                    <option>Sub-Domain</option>
                    <option>Sub-Folder</option>
                </select> 
            </div> 
        </div>
        <div class="form-row mb-3">
            <div class="mt-4 col-md-6">
                <label>Google ReCaptcha:</label>
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="captcha" value="true" {{$settings->captcha == 'true' ? 'checked' : ''}} class="selectgroup-input">
                        <span class="selectgroup-button">On</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="captcha" value="false" class="selectgroup-input" {{$settings->captcha != 'true' ? 'checked' : ''}}>
                        <span class="selectgroup-button">Off</span>
                    </label>
                </div>
                <div>
                   <small>if turned on, Users will need to pass the google recaptcha challenge upon registration, also please see how to set up google recpatcha on your website before you can use it.</small> 
                </div>
                
            </div>
            <div class="mt-4 col-md-6">
                <label>Google Login</label>
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="social" value="yes" {{$settings->social == 'yes' ? 'checked' : ''}} class="selectgroup-input">
                        <span class="selectgroup-button">On</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="social" value="no" {{$settings->social != 'yes' ? 'checked' : ''}} class="selectgroup-input">
                        <span class="selectgroup-button">Off</span>
                    </label>
                </div>
                <div>
                  <small>Google Login allows users to login/register with their google account</small> 
                </div>
            </div>
            <div class="mt-4 col-md-6">
                <label>Email Verification</label>
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="email_verify" value="true" {{$settings->email_verify == 'true' ? 'checked' : ''}} class="selectgroup-input">
                        <span class="selectgroup-button">Enable</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="email_verify" {{$settings->email_verify == 'false' ? 'checked' : ''}} value="false" class="selectgroup-input">
                        <span class="selectgroup-button">Disable</span>
                    </label>
                </div>
                <div>
                  <small>If email verification is disabled users will not be ask to verify their email address.</small> 
                </div>
            </div>
            <div class="mt-4 col-md-6">
                <label>ICO sales countdown date</label>
                <input type="datetime-local" name="sales_start_date" value="{{ date('Y-m-d\TH:i', strtotime($settings->sales_start_date)) }}" class="form-control">
                {{-- <span>Current Date: <strong>{{$settings->sales_start_date}}</strong> </span> --}}
                <div>
                  <small>Set the date we're counting down to</small> 
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Logo (Recommended size; max width, 200px and max height 100px.)</label>
                <input name="logo" class="form-control" type="file">
            </div>
            <div class="form-group col-md-6">
                <label>Favicon (Recommended type: png, size: max width, 32px and max height 32px.)</label>
                <input name="favicon" class="form-control" type="file">
            </div> 
        </div>
        
        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>  
</div>