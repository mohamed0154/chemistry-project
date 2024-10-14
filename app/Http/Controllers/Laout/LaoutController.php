<?php

namespace App\Http\Controllers\Laout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class LaoutController extends Controller
{

    public function about_view(){
        return view('layouts.About');
    }

    public function chemical(){
        return view('layouts.Chemical');
    }

}
