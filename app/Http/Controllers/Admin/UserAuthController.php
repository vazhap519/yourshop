<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

   public function register(){
        return view('auth.register');
    }
   public function create(Request $request){
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
            'region'=>'required',
            'city'=>'required',
            'full_address'=>'required',
            'phone'=>'required',
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

    public  function profile(){
        return view('admin.users.profile');
    }



public function userAuth(Request $request){
       dd($request);
}

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('index');
    }
}
