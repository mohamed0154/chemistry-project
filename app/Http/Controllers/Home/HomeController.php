<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class HomeController extends Controller
{
    public function welcome_show(){
        return view('welcome');
    }

    public function home_page(){
        return view('home');
    }






    public function quiz_one(){
        return view('tasks.QuizOne');
    }
    public function quiz_two(){
        return view('tasks.QuizTwo');
    }
    public function quiz_three(){
        return view('tasks.QuizThree');
    }
}
