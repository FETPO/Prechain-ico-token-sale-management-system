<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kyc;
use Illuminate\Support\Facades\Auth;
class KycController extends Controller
{
    //
    public function submitkyc(Request $request){
        $this->validate($request, [
            'doc1' => 'mimes:jpg,jpeg,png|max:4000|image',
            'doc2' => 'mimes:jpg,jpeg,png|max:4000|image',
            'photo' => 'mimes:jpg,jpeg,png|max:4000|image',
        ]);

        if($request->hasfile('doc1')){
            $document1 = $request->file('doc1');
            $filename1 = $document1->getClientOriginalName();
            $check1 = explode(".", $filename1);
            $ext1 = array_pop($check1);
            //return $ext;
            $whitelist1 = array('pdf','doc','jpeg','jpg','png');
            if (in_array($ext1, $whitelist1)) {
                $path1 = $document1->store('photos', 'public');
            } else {
            return redirect()->back()
            ->with('message', 'Unaccepted Image Uploaded, try renaming the image file');
            }
        } 
        if($request->hasfile('doc2')){
            $document2 = $request->file('doc2');
            $filename2 = $document2->getClientOriginalName();
            $check2 = explode(".", $filename2);
            $ext2 = array_pop($check2);
            $whitelist2 = array('pdf','doc','jpeg','jpg','png');
            if (in_array($ext2, $whitelist2)) {
                $path2 = $document2->store('photos', 'public');
            } else {
            return redirect()->back()
            ->with('message', 'Unaccepted Image Uploaded, try renaming the image file');
            }
        } 
        if($request->hasfile('photo')){
            $document3 = $request->file('photo');
            $filename3 = $document3->getClientOriginalName();
            $check3 = explode(".", $filename3);
            $ext3 = array_pop($check3);
            $whitelist3 = array('pdf','doc','jpeg','jpg','png');
            if (in_array($ext3, $whitelist3)) {
                $path3 = $document3->store('photos', 'public');
            } else {
            return redirect()->back()
            ->with('message', 'Unaccepted Image Uploaded, try renaming the image file');
            }
        } 

        $newdoc = new Kyc();
        $newdoc->firstname = $request->firstname;
        $newdoc->lastname = $request->lastname;
        $newdoc->address = $request->address;
        $newdoc->dob = $request->dob;
        $newdoc->gender = $request->gender;
        $newdoc->doc_type = $request->doc_type;
        $newdoc->doc1 = $path1;
        $newdoc->doc2 = $path2;
        $newdoc->photo = $path3;
        $newdoc->status = 'pending';
        $newdoc->user = Auth::user()->id;
        $newdoc->save();
        return redirect()->back()->with('success',"Verification document succesffully submitted and under review");
    }
}
