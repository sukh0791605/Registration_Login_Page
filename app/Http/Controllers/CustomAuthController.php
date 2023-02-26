<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
      public function index(){
        return view('Welcome');
      }
      public function register(Request $request){
        // dd($request->all());
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:5|max:10'
            ]
            );
            $User=new User();
            $User->name=$request->name;
            $User->email=$request->email;
            $User->password=$request->password;
             $request=$User->save();
             if($request){
                return back()->with('success',"user register successfully");
             }
             else{
                return back()->with('failure',"something is wrong");
             }

      }
}
