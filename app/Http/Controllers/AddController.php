<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        $user=User::get();
        return view('/Add/Add',compact('user'));

    }
}
