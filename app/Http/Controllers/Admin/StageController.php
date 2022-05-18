<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    // Admin adds stage
    public function addstage(Request $request){
        $st = new Stage();
        $st->stage_name = $request->stage_name;
        $st->token = $request->token;
        $st->token_avail = $request->token;
        $st->price = $request->price;
        $st->bonus = $request->bonus;
        $st->min = $request->min;
        $st->max = $request->max;
        $st->start_date = $request->startdate;
        $st->end_date = $request->enddate;
        $st->status = "active";
        $st->sales = "on";
        $st->save();
        return redirect()->back()->with('success',"Stage Created Successfully");
    }

    // Admin Update stage
    public function updatestage(Request $request){
        
        Stage::where('id', $request->stage_id)->update([
            'stage_name'=> $request->stage_name,
            'token'=> $request->token,
            'token_avail' => $request->token,
            'price' => $request->price,
            'bonus' => $request->bonus,
            'min' => $request->min,
            'max' => $request->max,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
        ]);

        return redirect()->back()->with('success',"Stage Updated Successfully");
    }

    // Admin adds stage
    public function markactive($id){
        
        Stage::where('id', $id)->update([
            'status' => "active",
        ]);

        return redirect()->back()->with('success',"Stage Marked as Active Successfully");
    }

    // Admin adds stage
    public function pausesales($id){
        
        Stage::where('id', $id)->update([
            'sales' => "paused",
        ]);

        return redirect()->back()->with('success',"Sales Paused Successfully for this stage");
    }

    public function resumesales($id){
        
        Stage::where('id', $id)->update([
            'sales' => "on",
        ]);

        return redirect()->back()->with('success',"Sales Resumed Successfully for this stage");
    }





}
