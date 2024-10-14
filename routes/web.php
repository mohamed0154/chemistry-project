<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthrController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Task\QuizController;
use App\Http\Controllers\Laout\LaoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





    Route::group(['middleware'=>'guest'],function(){
        Route::get('/', [HomeController::class, 'welcome_show'])->name('welcome_users');

        /////////////////////////////////Authentication///////////////////////////
        Route::get('/register', [AuthrController::class, 'show'])->name('sign_up_view');
        Route::POST('/store', [AuthrController::class, 'store'])->name('store');
        Route::get('/login', [AuthrController::class, 'login_view'])->name('login');
        Route::POST('/user/login', [AuthrController::class, 'Authenticate'])->name('user.login');



        /////////////////////////////////Reset Password////////////////////////////
        Route::get('/user_email', [AuthrController::class, 'email_ensure'])->name('forget_pass');
        Route::get('/reset_form', [AuthrController::class, 'reset_form'])->name('reset_form');

        Route::POST('/ensure_email', [AuthrController::class, 'ensure_email'])->name('ensure_email');
        Route::POST('/change_password', [AuthrController::class, 'change_password'])->name('change_password');

        Route::get('/verification', [AuthrController::class, 'verification_email'])->name('verification');


    });



    Route::group(['middleware'=>'auth'],function(){
        /////////////////////////////////Layouts////////////////////////////////////////
        Route::get('/home', [HomeController::class, 'home_page'])->name('home_page');

        Route::get('/About', [LaoutController::class, 'about_view'])->name('about_us');
        Route::get('/Chemical', [LaoutController::class, 'Chemical'])->name('chemical');

        Route::get('/profile', [ProfileController::class, 'user_profile'])->name('user.profile');
        Route::POST('/add_photo', [ProfileController::class, 'edit_photo'])->name('user.photo');
        Route::POST('/edit_profile', [ProfileController::class, 'edit_password'])->name('edit.profile');

        Route::get('/Quiz1', [QuizController::class, 'quiz_one'])->name('Quiz_one');
        Route::get('/Quiz2', [QuizController::class, 'quiz_two'])->name('Quiz_two');
        Route::get('/Quiz3', [QuizController::class, 'quiz_three'])->name('Quiz_three');


        ///////////////////////////////Logout/////////////////////////////////////
        Route::get('/logout', [AuthrController::class, 'logout'])->name('logout');

    });
