<?php

namespace App\Http\Controllers;

use App\TimeRecording;
use App\User;
use Illuminate\Http\Request;

class TimeRecordingController extends Controller
{
    public function index()
    {
        $Time = TimeRecording::get();
        $clock = TimeRecording::count();
//        $clocknum = Item::count();
        return view('/Time/TimeRecording', compact('Time','clock'));
    }

    public function store(Request $request)
    {
//        $t3=($request['timeout']-12)+($request['timein']);
        $Delay = $request['timein'] - 9;
        $Daily1 = $request['timein'];
        $Daily2 = $Delay - $Daily1;
        TimeRecording::create([
            'name'=>auth()->user()->name,
            'timein' => $request['timein'],
            'timeout' => $request['timeout'],
            'Leaveclock' => $request['Leaveclock'],
            'text' => $request['text'],
            'Delay' => $Delay,
            'Daily' => $Daily2,
        ]);
        session()->flash('alert', 'ثبت ساعت ورود و خروج امروز شما با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function ViewTime()
    {
        $show=User::get();
        return view('/Admin/ViewTime',compact('show'));

    }
}