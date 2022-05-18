<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stage;
use App\Models\Settings;
use App\Models\Transactions;
use App\Models\User;
use App\Models\Referral;
use App\Models\Activity;
use App\Models\Kyc;
use App\Mail\Newmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class AdKycController extends Controller
{
    //

    public function downloadfile($file){
        $download_path = ( public_path() .  '/storage/' .'/photos/' . $file );
        return( Response::download( $download_path ) );
    }

    public function accept($id){
        $record = Kyc::where('id', $id)->first();
        
        Kyc::where('id', $id)->update([
            'status' => "Verified",
        ]);
        User::where('id', $record->user)->update([
            'verification_status' => "Verified",
        ]);
        $settings=Settings::where('id', '=', '1')->first();
        //send email notification
        $mailduser=User::where('id',$record->user)->first();
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that your request for verification was approved by our team, which means you can now succesffully purchase token without any restriction.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Account Verified";
        $objDemo->greeting = "Hello $mailduser->name";
        Mail::bcc($mailduser->email)->send(new Newmail($objDemo));

        return redirect()->back()->with('success',"User Successfully Verified");
    }

    public function reject($id){
        $record = Kyc::where('id', $id)->first();
        
        Kyc::where('id', $id)->update([
            'status' => "pending",
        ]);

        User::where('id', $record->user)->update([
            'verification_status' => "Not Verified",
        ]);
       
        return redirect()->back()->with('success',"User Verification Declined, Note in order for the user to re-submit kyc document, please delete this kyc record. user will be notified that they need to re-submit verification details again.");
    }

    public function delete($id){
        $record = Kyc::where('id', $id)->first();
        Kyc::where('id', $id)->delete();
        User::where('id', $record->user)->update([
            'verification_status' => "Not Verified",
        ]);

        $settings=Settings::where('id', '=', '1')->first();
        //send email notification
        $mailduser=User::where('id',$record->user)->first();
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that your request for verification was declined by our team, this may be due to wrong information provided or your documents are not correct. please contact support for more information.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Verification Declined";
        $objDemo->greeting = "Hello $mailduser->name";
        //Mail::bcc($mailduser->email)->send(new Newmail($objDemo));

        return redirect()->back()->with('success',"User Verification Deleted");
    }

}
