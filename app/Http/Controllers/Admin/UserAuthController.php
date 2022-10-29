<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $query=$user->save();
if ($query){
    return back()->with('success','you have succsesfuli register');
}else{
    return back()->with('fail','failed register');
}
    }


    function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user=User::where('email','=', $request->email)->first();
        if($user){
                if(Hash::check($request->password,$user->password)){
                    $request->session()->put('LoggedUser',$user->id);
                    return redirect::to('profile');
                }
                else{
                    return back()->with('fail','this email and passord not found');
                }
        }else{
            return back()->with('fail','no account this email');
        }
    }

    function profile(){
        return view('admin.users.profile');
    }

    function logout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }
}
