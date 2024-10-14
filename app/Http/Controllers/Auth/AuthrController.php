<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;



class AuthrController extends Controller
{
    public function show(){
        return view("auth/register");
    }


    public function store(AuthRequest $request){

        Users::create([
            'username'=>$request->username,
            'email'=> $request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect(url('login'))->with('success','User Created Done');

    }




    public function login_view( ){
        return view("auth/login");
    }

    public function Authenticate(Request $request ){
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|string|max:12',
            ]);

        if(isset($request) && !empty($request)){
            $remember=$request->has('remember_me')? true : false;
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember)){

                return redirect(route('home_page'));

            }
            return back()->with('error','user or pass is incorrect');
        }
    }

    public function email_ensure(){
        return view('auth.email');

    }

    public function reset_form(Request $request){
        // return $request;
        $user= $request;
        return view('auth.ResetPassword',compact('user'));
    }


    public function ensure_email(Request $request){

        if(isset($request) && !empty($request)){
            $request->validate([
                'email'=>'required|email|exists:users',
            ]);

            $user=Users::where('email',$request->email)->first();
           if(isset($user) && $user != null)
           {

            return redirect(route('reset_form', ['q' => $user->id]));
           }

        }
    }

    public function change_password(Request $request){
          if(isset($request) && $request != null){

            $request->validate([
              'password'=>'required',
              'confirm_password'=>'required|same:password',
              'id'=>'required|exists:users',
            ]);

            $user=Users::find($request->id);
            if(isset($user) && $user != null){
                $data=$request->except('id','confirm_password');
                $data['password'] = Hash::make($request->password);
                $user->update($data);
            return redirect(route('login'))->with(['success'=>'Your Password is updated']);
           }else{
              return back()->with('error',' ');
           }
        }
    }

    public function verification_email(){
        return view('auth.verification');
    }


    public function logout(){
          $user=Auth::guard('web')->user();
          Auth::guard('web')->logout($user);

          return redirect(route('login'));
    }
}
