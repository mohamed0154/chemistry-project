<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserProfile;
use App\Models\User;
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


    public function update(UpdateUserProfile $request){
      

             $user=Auth::user();
             if(Hash::check($request->current_password,$user->password)){
                $data=$request->except('password_confirmation','current_password','password');
                $data['password']=Hash::make($request->password);
                $user->update($data);
                return redirect(route('users.profile'))->with('success','Updated Done');
            }
             return redirect()->back()->with(['failed'=>'Your Password is not correct']);
        
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
