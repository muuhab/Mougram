<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function postSignUp(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|unique:users|email',
            'fname'=>'required|max:120',
            'pass'=>'required|min:4',

        ]);

        $user=new User();
        $user->email=$request->input('email');
        $user->first_name=$request->input('fname');
        $user->password=bcrypt($request->input('pass'));
        $user->profile_image='noimage.jpg';
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');

    }
    public function postSignIn(Request $request)
    {

        $this->validate($request,[
            'email2'=>'required|email',
            'pass2'=>'required',

        ]);
        if(Auth::attempt(['email'=>$request['email2'],'password'=>$request['pass2']]))
        {
            Mail::raw('muhaaaa',function($a){
                $a->to(request('email2'))->subject('aaa');
            });
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back();
        }

    }
    public function  logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function account(){
        
        return view('account',['user'=>Auth::user()]);
    }
    public function saveAccount(Request $request){
        $this->validate($request,[
            'first_name'=>'required|max:120'
        ]);
    
        if($request->hasFile('image')){

            $filenameWithExt=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/profile_images',$fileNameToStore);
            
        } else{ 
            $fileNameToStore='noimage.jpg';
        }
        $user=Auth::user();
        $user->first_name=$request['first_name'];
        if($request->hasFile('image')){
            if ($user->profile_image != 'noimage.jpg') {
                Storage::delete('public/profile_images/'.$user->profile_image);
            }
            $user->profile_image=$fileNameToStore;
        }
        $user->update();
        return redirect()->route('account');
    }
}
