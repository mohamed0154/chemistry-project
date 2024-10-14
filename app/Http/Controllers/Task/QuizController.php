<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class QuizController extends Controller
{

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
