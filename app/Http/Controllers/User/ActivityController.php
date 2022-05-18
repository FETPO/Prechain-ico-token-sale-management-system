<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Activity;
class ActivityController extends Controller
{
    //clear activity
    public function clearactivity($user_id){
        $useract = Activity::where('user', $user_id)->get();
        foreach ($useract as $act) {
            Activity::where('id', $act->id)->delete();
        }
        return redirect()->back()->with('success',"Activities Cleared Successfully");
    }
}
