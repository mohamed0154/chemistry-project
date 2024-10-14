<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class ProfileController extends Controller
{




    public function user_profile(){
        $user_data= Auth()->user();
        return view('profile.MyProfile',compact('user_data'));
    }

    public function edit_password(Request $request){
        if(isset($request) && $request != null){

            $request->validate([
              'currentPass'=>'required|max:12',
              'newPass'=>'required|max:12',
              'confirmPass'=>'required|same:newPass',
            ]);

             $user=Users::find(auth()->user()->id);
             if(password_verify($request->currentPass,$user->password)){
                $data=$request->except('confirmPass','currentPass','newPass');
                $data['password']=Hash::make($request->newPass);
                $user->update($data);
                return redirect(route('user.profile'))->with('success','Updated Done');
            }

             return redirect()->back()->with(['failed'=>'Your Password is not correct']);
        }
    }

    public function edit_photo(Request $request){

         if($request->photo != null){
            $request->validate([
                'photo'=>'required_without:id|mimes:jpg,png,jpeg',
              ]);

            $file_extension=$request->photo->getClientOriginalExtension();
            $file_name=time().'.'.$file_extension;
            $path='images/profiles';
            $request->photo->move($path,$file_name);

             $user=Users::find(auth()->user()->id);
                if(isset($user) && $user != null){
                    $data=$request->except('id','username','email','password');
                    $data['photo'] = $file_name;
                    $user->update($data);
                return redirect(route('user.profile'))->with(['success'=>'Your Profile is updated']);
            }else{
                return back()->with('error',' ');
            }
         }
    }

}
