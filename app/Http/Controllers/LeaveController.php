<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        $leave=Leave::get();
        return view('/Leave/Leave',compact('leave'));

    }

    public function store(Request $request)
    {
        Leave::create([
           'name'=>$request['name'],
           'Demand'=>$request['Demand'],
           'from'=>$request['from'],
           'Uptodate'=>$request['Uptodate']

        ]);
        return redirect()->back();

    }
}
