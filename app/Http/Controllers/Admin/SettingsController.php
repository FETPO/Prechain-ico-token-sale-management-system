<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Paymethod;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //Save ICO settings
    Public function saveico(Request $request){

        Settings::where('id', '1')->update([
            'token_name' => $request->token_name,
            'token_symbol' => $request->token_symbol,
            'amt_usd' => $request->price,
        ]);
        return redirect()->back()->with('success',"Settings Updated Successfully");
    }


    //Save Website information settings
    Public function savewebsettings(Request $request){

        $this->validate($request, [
            'logo' => 'mimes:jpg,jpeg,png|max:500|image',
            'favicon' => 'mimes:jpg,jpeg,png,ico|max:500',
          ]);
    
          $settings = Settings::where('id', '=', '1')->first();
          
          if($request->hasfile('logo'))
             {
              $file = $request->file('logo');
              Storage::disk('public')->delete($settings->logo);
              $path = $file->store('photos', 'public');
  
          } else {
              $path  = $settings->logo;
          }
    
          if($request->hasfile('favicon'))
             {
              $favfile = $request->file('favicon');
              Storage::disk('public')->delete($settings->favicon);
              $pathfav = $favfile->store('photos', 'public');
          }else {
              $pathfav = $settings->favicon;
          }

        Settings::where('id', '1')->update([
            'site_name' => $request->site_name,
            'site_email' => $request->email,
            'site_url' => $request->url,
            'address' => $request->address,
            'phone' => $request->phone,
            'logo'=>$path,
            'favicon'=>$pathfav,
            'livechat'=>strip_tags($request['livechat']),
            'whitepaper'=>$request['whitepaper'],
            'annoucement'=>$request['annoucement'],
            'email_verify'=>$request['email_verify'],
            'social' => $request['social'],
            'sales_start_date' => $request->sales_start_date,
            'install_type' => $request->install_type,
            'captcha' => $request['captcha'],
        ]);
        return redirect()->back()->with('success',"Settings Updated Successfully");
    }

   
    Public function savepayoption(Request $request){

        $payoptions = $request->payopt;
        $optionsArray = array();
        foreach($payoptions as $option){
           $optionsArray[] = $option;
        }
        Settings::where('id', '1')->update([
            'pay_methods' => json_encode($optionsArray),
        ]);
        return redirect()->back()->with('success',"Settings Updated Successfully");
    }

    Public function savemethod(Request $request){

        $paymethod = new Paymethod();
        $paymethod->method_name = $request->name;
        $paymethod->type = $request->p_type;
        $paymethod->symbol = $request->symbol;
        $paymethod->address = $request->address;
        $paymethod->networkmode = $request->network;
        $paymethod->acntnum = $request->acntnum;
        $paymethod->acntname = $request->acntname;
        $paymethod->bankname = $request->bankname;
        $paymethod->swcode = $request->swcode;
        $paymethod->save();
        return redirect()->back()->with('success',"Payment Info added Successfully");
    }

    Public function updatemethod(Request $request){

        Paymethod::where('id', $request->payid)->update([
            'method_name' => $request->name,
            'type' => $request->p_type,
            'symbol' => $request->symbol,
            'address' => $request->address,
            'networkmode' => $request->network,
            'acntnum' => $request->acntnum,
            'acntname' => $request->acntname,
            'bankname' => $request->bankname,
            'swcode' => $request->swcode,
        ]);
        return redirect()->back()->with('success',"Payment Info Updated Successfully");
    }


    public function savestakeset(Request $request){
       
        $payoptions = $request->duration;
        $optionsArray = array();
        foreach($payoptions as $option){
           $optionsArray[] = $option;
        }

        if($request->usestatke == '1'){
            $usestakefeature = true;
        }else {
            $usestakefeature = false;
        }
        Settings::where('id', 1)->update([
            'usestake' => $usestakefeature,
            'one_month_roi' => $request->onem,
            'four_month_roi' => $request->fourm,
            'six_month_roi' => $request->sixm,
            'nine_month_roi' => $request->ninem,
            'one_year_roi' => $request->oneyear,
            'duration' => json_encode($optionsArray),
            'minstake' => $request->minstake,
            'maxstake' => $request->maxstake,
        ]);
        return redirect()->back()->with('success',"Staking Info Updated Successfully"); 
    }

    Public function saverefcom(Request $request){

        Settings::where('id', '1')->update([
            'ref_com' => $request->ref_com,
        ]);
        return redirect()->back()->with('success',"Referral Commission Info Updated Successfully");
    }

    Public function savekycset(Request $request){

        Settings::where('id', '1')->update([
            'kyc_verification' => $request->kycstat,
        ]);
        return redirect()->back()->with('success',"Settings Saved");
    }





}
